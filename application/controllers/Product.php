<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends My_Controller {


	public function __construct() {
		parent::__construct();
		$this->now = time();
		$this->template = 'template/';
		$this->cjs = ['Product'];
		$this->body = 'product/';
		$this->header = $this->template.'header/after_login';
		$this->footer = $this->template.'footer/after_login';
	}
	public function index()	{
		$this->add();
	}
	public function add()	{		
		$data['pageheading'] = 'Product Add';
		$data['cjs'] = $this->cjs;
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
		$product_name = $this->input->post('txtProductName',TRUE);
		$product_description = $this->input->post('txtProductDescription',TRUE);
		// $sku = $this->input->post('txtProductSKU',TRUE);
		$product_hsn = $this->input->post('txtProductHSN',TRUE);
		$product_color = $this->input->post('txtProductColor',TRUE);
		$product_size = $this->input->post('txtProductSize',TRUE);
		$uom_ID = $this->input->post('txtProductUOM',TRUE);
		$category_ID = $this->input->post('txtProductCategory',TRUE);
		// $unit_price = $this->input->post('txtProductUnitPrice',TRUE);
		// $tax_ID = $this->input->post('txtProductTAX',TRUE);
		// $purchase_rate = $this->input->post('txtProductRate',TRUE);
		// $quantity = $this->input->post('txtProductQuantity',TRUE);
		$product_slug = createslug($this->input->post('txtProductName',TRUE));
		$barcodeNumber = md5($product_name);
		$insert = [
		'company_product_code'=>$barcodeNumber,
		// 'barcode_number'=>$barcodeNumber,
		// 'sku'=>$sku,
		'product_name'=>$product_name,
		'product_description'=>$product_description,
		'product_hsn'=>$product_hsn,
		'product_color'=>$product_color,
		'product_size'=>$product_size,
		'uom_ID'=>$uom_ID,
		'category_ID'=>$category_ID,
		// 'unit_price'=>$unit_price,
		// 'tax_ID'=>$tax_ID,
		// 'purchase_rate'=>$purchase_rate,
		// 'quantity'=>$quantity,
		'product_slug'=>$product_slug,
		'status'=>1,
		'date_created'=>unix_to_human($this->now,TRUE)
		];
		$id = $this->common->insert_data('product',$insert);
		if($id == TRUE) {
				$config['upload_path']          = FCPATH.'/uploads/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';

                $this->load->library('upload', $config);

                if ( $this->upload->do_upload('productFile'))
                {
					   $data = $this->upload->data();
					   $image = [
					   'product_image'=>$data['file_name']
					   ];
					   $this->common->update_data('product',$image,['product_ID'=>$id]);
                }
			$msg = 'Product has been successfully added.';
			$this->session->set_flashdata('success',$msg);
		}
		redirect('product-add');
	}
	public function listing()	{		
		$data['pageheading'] = 'Product List';
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
