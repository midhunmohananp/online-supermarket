<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase extends My_Controller {


	public function __construct() {
		parent::__construct();
		$this->now = time();
		$this->template = 'template/';
		$this->cjs = ['Purchase'];
		$this->body = 'purchase/';
		$this->header = $this->template.'header/after_login';
		$this->footer = $this->template.'footer/after_login';
	}
	public function index()	{
		$this->add();
	}
	public function add()	{		
		$data['pageheading'] = 'Purchase Add';
		$data['cjs'] = $this->cjs;
		$data['products'] = $this->common->get_data_where('product',['status'=>1]);
		$data['units'] = $this->common->get_data_where('unit_of_measure',['status'=>1]);
		$data['taxs'] = $this->common->get_data_where('tax',['status'=>1]);
		$data['categories'] = $this->common->get_data_where('category',['status'=>1]);
		$this->load->view($this->header);
		$this->load->view($this->template.'header');
		$this->load->view($this->template.'sidebar');
		$this->load->view($this->template.'heading',$data);
		$this->load->view($this->body.'add',$data);
		$this->load->view($this->footer);
	}
	public function insert() {
		$msg = '';		
		$product_ID = $this->input->post('txtProductID',TRUE);
		$sku = $this->input->post('txtProductSKU',TRUE);
		$uom_ID = $this->input->post('txtProductUOM',TRUE);
		$category_ID = $this->input->post('txtProductCategory',TRUE);
		$unit_price = $this->input->post('txtProductUnitPrice',TRUE);
		$tax_ID = $this->input->post('txtProductTax',TRUE);
		$purchase_rate = $this->input->post('txtProductPurchasePrice',TRUE);
		$quantity = $this->input->post('txtProductQty',TRUE);
		$product_slug = createslug($this->input->post('txtProductName',TRUE));
		$barcodeNumber = md5($product_ID.time());
		$insert = [
		'shop_ID'=>$this->shop_ID,
		'barcode_number'=>$barcodeNumber,
		'sku'=>$sku,
		'product_ID'=>$product_ID,
		'uom_ID'=>$uom_ID,
		'unit_price'=>$unit_price,
		'tax_ID'=>$tax_ID,
		'purchase_rate'=>$purchase_rate,
		'quantity'=>$quantity,
		'status'=>1,
		'date_created'=>unix_to_human($this->now,TRUE)
		];
		$id = $this->common->insert_data('store',$insert);
		if($id == TRUE) {
			$msg = 'Purchase has been successfully added.';			
		} else {
			$msg = 'Purchasse has been adding failed.';
		}
		$this->session->set_flashdata('success',$msg);
		redirect('purchase-add');
	}
	public function listing()	{		
		$data['pageheading'] = 'Purchase List';
		$data['cjs'] = $this->cjs;
		$data['products'] = $this->common->get_data_where('product',['status'=>1]);
		$this->load->view($this->header);
		$this->load->view($this->template.'header');
		$this->load->view($this->template.'sidebar');
		$this->load->view($this->template.'heading',$data);
		$this->load->view($this->body.'list',$data);
		$this->load->view($this->footer);
	}
}
