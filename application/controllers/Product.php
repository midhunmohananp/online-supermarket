<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends My_Controller {


	public function __construct() {
		parent::__construct();
		$this->now = time();
		$this->template = 'template/';
		$this->cjs = ['Product'];
		$this->body = 'product/';
		$this->load->model('product_m');
		$this->header = $this->template.'header/after_login';
		$this->footer = $this->template.'footer/after_login';
	}
	public function index()	{
		$this->add();
	}
	public function add()	{		
		$data['pageheading'] = 'Product Add';
		$data['cjs'] = $this->cjs;
		$data['brands'] = $this->common->get_data_where('brand',['status'=>1]);
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
		$product_hsn = $this->input->post('txtProductHSN',TRUE);
		$product_color = $this->input->post('txtProductColor',TRUE);
		$product_size = $this->input->post('txtProductSize',TRUE);
		$uom_ID = $this->input->post('txtProductUOM',TRUE);
		$category_ID = $this->input->post('txtProductCategory',TRUE);
		$brand_ID = $this->input->post('txtProductBrand',TRUE);
		$product_slug = createslug($this->input->post('txtProductName',TRUE));
		$barcodeNumber = md5($product_name);
		$insert = [
		'company_product_code'=>$barcodeNumber,
		'product_name'=>$product_name,
		'product_description'=>$product_description,
		'product_hsn'=>$product_hsn,
		'product_color'=>$product_color,
		'product_size'=>$product_size,
		'uom_ID'=>$uom_ID,
		'category_ID'=>$category_ID,
		'brand_ID'=>$brand_ID,
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
		$data['products'] = $this->product_m->getProducts();
		$this->load->view($this->header);
		$this->load->view($this->template.'header');
		$this->load->view($this->template.'sidebar');
		$this->load->view($this->template.'heading',$data);
		$this->load->view($this->body.'list',$data);
		$this->load->view($this->footer);
	}
	public function delete() {
		$msg = '';
		$product_ID = $this->input->post('txtProductID',TRUE);
		$update_data = [
		'status'=>0,
		];
		$condition = ['product_ID'=>$product_ID];
		$update = $this->common->update_data('product',$update_data,$condition);
		if($update == TRUE) {
			$msg = 'Product has been successfully deleted.';
			$this->session->set_flashdata('success',$msg);
		}
		redirect('product-listing');
	}
	public function edit($product_ID)	{		
		$data['pageheading'] = 'Product Edit';
		$data['cjs'] = $this->cjs;
		$data['units'] = $this->common->get_data('unit_of_measure');
		$data['taxs'] = $this->common->get_data('tax');
		$data['categories'] = $this->common->get_data('category');
		$data['brands'] = $this->common->get_data('brand');
		$data['product'] = $this->common->get_data_where_row('product',['product_ID'=>$product_ID]);
		$this->load->view($this->header);
		$this->load->view($this->template.'header');
		$this->load->view($this->template.'sidebar');
		$this->load->view($this->template.'heading',$data);
		$this->load->view($this->body.'edit',$data);
		$this->load->view($this->footer);
	}
	public function update($product_ID)
	{
		$msg = '';		
		$product_name = $this->input->post('txtProductName',TRUE);
		$product_description = $this->input->post('txtProductDescription',TRUE);
		$product_color = $this->input->post('txtProductColor',TRUE);
		$product_size = $this->input->post('txtProductSize',TRUE);
		$uom_ID = $this->input->post('txtProductUOM',TRUE);
		$category_ID = $this->input->post('txtProductCategory',TRUE);
		$brand_ID = $this->input->post('txtProductBrand',TRUE);
		$product_slug = createslug($this->input->post('txtProductName',TRUE));
		$barcodeNumber = md5($product_name);
		$update_data = [
		'company_product_code'=>$barcodeNumber,
		'product_name'=>$product_name,
		'product_description'=>$product_description,
		'product_color'=>$product_color,
		'product_size'=>$product_size,
		'uom_ID'=>$uom_ID,
		'category_ID'=>$category_ID,
		'brand_ID'=>$brand_ID,
		];
		$condition = ['product_ID'=>$product_ID];
		$update = $this->common->update_data('product',$update_data,$condition);
		if($update == TRUE) {
				$config['upload_path']          = FCPATH.'/uploads/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';

                $this->load->library('upload', $config);

                if ( $this->upload->do_upload('productFile'))
                {
					   $data = $this->upload->data();
					   $image = [
					   'product_image'=>$data['file_name']
					   ];
					   $this->common->update_data('product',$image,['product_ID'=>$product_ID]);
                }
			$msg = 'Product has been successfully added.';
			$this->session->set_flashdata('success',$msg);
		}
		redirect('product-listing');
	}
}
