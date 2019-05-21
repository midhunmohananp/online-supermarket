<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sale extends My_Controller {


	public function __construct() {
		parent::__construct();
		$this->now = time();
		$this->template = 'template/';
		$this->cjs = ['Sale'];
		$this->body = 'sale/';
		$this->header = $this->template.'header/after_login';
		$this->footer = $this->template.'footer/after_login';
		$this->load->model('sale_m');
		$this->load->model('store_m');
	}
	public function index()	{
		$this->new_sale();
	}
	public function new_sale()	{		
		$data['pageheading'] = 'Product Sale';
		$data['cjs'] = $this->cjs;
		$data['units'] = $this->common->get_data_where('unit_of_measure',['status'=>1]);
		$data['taxs'] = $this->common->get_data_where('tax',['status'=>1]);
		$data['categories'] = $this->common->get_data_where('category',['status'=>1]);
		$data['invoice_number'] = $this->sale_m->getInvoiceNumber();
		$data['invoice_date'] = $this->unix_date;
		$data['user_name'] = $this->user_name;
		$data['shop_ID'] = $this->shop_ID;
		$this->load->view($this->header);
		$this->load->view($this->template.'header');
		$this->load->view($this->template.'sidebar');
		$this->load->view($this->template.'heading',$data);
		$this->load->view($this->body.'new_sale',$data);
		$this->load->view($this->footer);
	}
	public function saveSale()
	{
		$customer_ID= $this->input->post('customer_id',TRUE);
		$customer_name = $this->input->post('customer_name',TRUE);
		$customer_mobile = $this->input->post('customer_mobile',TRUE);
		$customer_email = $this->input->post('customer_email',TRUE);
		$invoice_items = json_decode($this->input->post('invoice_items',TRUE));
		if(empty($customer_ID)) {
			$insert = [
			'first_name'=>$customer_name,
			'email'=>$customer_mobile,
			'phone'=>$customer_email,
			'customer_slug'=>createslug($customer_name.$customer_email),
			'status'=>1,
			'date_created'=>unix_to_human($this->now,TRUE)
			];

			$customer_ID = $this->common->insert_data('customer',$insert);
		}
		$invoice_number = $this->sale_m->getInvoiceNumber();
		$total_amount = 0.00;
		$balance_amount = 0.00;
		$discount_amount = 0.00;
		$net_amount = 0.00;
		$payed_amount = 0.00;
		$balance_amount = 0.00;
		$balance_amount = 0.00;
		foreach ($invoice_items as $item) {
			$price = $item->product_unit_price;
			$tax = $item->product_tax;
			$discount = $item->product_discount;
			$quantity = $item->product_qty;
			$item_tax_amount = ($price*$tax)/100;
			$item_discount_amount = ($price*$discount)/100;
			$item_total_amount = (($price+$item_tax_amount))*$quantity;
			$item_net_amount=($item_total_amount-$item_discount_amount);
			$total_amount = $total_amount+$item_total_amount;
			$discount_amount = $discount_amount+$item_discount_amount;
			$net_amount = $net_amount+$item_net_amount;
			$payed_amount = $payed_amount+$item_net_amount;
		}
		$invoice = [
			'invoice_number'=>'invoice_'.$invoice_number,
			'shop_ID'=>$this->shop_ID,
			'customer_ID'=>$customer_ID,
			'total_amount'=>$total_amount,
			'discount_amount'=>$discount_amount,
			'net_amount'=>$net_amount,
			'payed_amount'=>$payed_amount,
			'balance_amount'=>$balance_amount,
			'payment_status'=>1,
			'status'=>1,
			'date_created'=>unix_to_human($this->now,TRUE)
		];
		$invoice_ID = $this->common->insert_data('invoice',$invoice);
		if($invoice_ID == true) {
			foreach ($invoice_items as $item) {
				$price = $item->product_unit_price;
				$tax = $item->product_tax;
				$discount = $item->product_discount;
				$product_quantity = $item->product_qty;
				$product_tax_amount = ($price*$tax)/100;
				$product_discount = ($price*$discount)/100;
				$product_amount = (($price+$product_tax_amount));
				$product_total_amount = ($product_amount-$product_discount)*$product_quantity;
				$invoice_item = [
					'invoice_ID'=>$invoice_ID,
					'store_ID'=>$item->product_store_ID,
					'shop_ID'=>$this->shop_ID,
					'product_ID'=>$item->product_ID,
					'product_unit_price'=>$price,
					'product_quantity'=>$product_quantity,
					'product_amount'=>$product_amount,
					'product_discount'=>$product_discount,
					'product_tax_amount'=>$product_tax_amount,
					'product_total_amount'=>$product_total_amount,
					'status'=>1,
					'date_created'=>unix_to_human($this->now,TRUE)
				];
				$invoice_item_ID = $this->common->insert_data('invoice_item',$invoice_item);
				$update = $this->store_m->qty_update($item->product_store_ID,$product_quantity);
			}
		}	
		$return_data = [
			'success'=>true,
			'invoice_ID'=>$invoice_ID
		];
		echo json_encode($return_data);
	}
	public function printSale($invoice_ID)
	{
		$data['pageheading'] = 'Invoice #'.$invoice_ID;
		$data['cjs'] = $this->cjs;
		$data['user_name'] = $this->user_name;
		$data['shop_ID'] = $this->shop_ID;
		$data['shop'] = $this->common->get_data_where_row('shop',['shop_ID'=>$this->shop_ID]);
		$invoice =  $this->common->get_data_where_row('invoice',['invoice_ID'=>$invoice_ID]);
		$data['invoice'] = $invoice;
		$data['customer'] = $this->common->get_data_where_row('customer',['customer_ID'=>$invoice->customer_ID]);
		$data['items'] = $this->sale_m->getInvoiceItems($invoice_ID);
		$this->load->view($this->header);
		$this->load->view($this->template.'header');
		$this->load->view($this->template.'sidebar');
		$this->load->view($this->template.'heading',$data);
		$this->load->view($this->body.'print_sale',$data);
		$this->load->view($this->footer);
	}
}
