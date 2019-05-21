<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brand extends My_Controller {


	public function __construct() {
		parent::__construct();
		$this->now = time();
		$this->template = 'template/';
		$this->cjs = ['Brand'];
		$this->body = 'brand/';
		$this->header = $this->template.'header/after_login';
		$this->footer = $this->template.'footer/after_login';
	}
	public function index()	{
		$this->add();
	}
	public function add()	{		
		$data['pageheading'] = 'Brand Add';		
		$data['cjs'] = $this->cjs;
		$this->load->view($this->header);
		$this->load->view($this->template.'header');
		$this->load->view($this->template.'sidebar');
		$this->load->view($this->template.'heading',$data);
		$this->load->view($this->body.'add',$data);
		$this->load->view($this->footer);
	}
	public function insert() {
		$msg = '';
		$brand_name = $this->input->post('txtBrandName',TRUE);
		$insert = [
		'brand_name'=>$brand_name,
		'brand_slug'=>createslug($brand_name),
		'status'=>1,
		'date_created'=>unix_to_human($this->now,TRUE)
		];
		$id = $this->common->insert_data('brand',$insert);
		if($id == TRUE) {
			$msg = 'Brand has been successfully added.';
			$this->session->set_flashdata('success',$msg);
		}
		redirect('brand-add');
	}
	public function listing()	{		
		$data['pageheading'] = 'Brand List';
		$data['cjs'] = $this->cjs;		
		$data['brands']=$this->common->get_data_where('brand',['status'=>1]);
		$this->load->view($this->header);
		$this->load->view($this->template.'header');
		$this->load->view($this->template.'sidebar');
		$this->load->view($this->template.'heading',$data);
		$this->load->view($this->body.'list',$data);
		$this->load->view($this->footer);
	}
	public function edit($brand_ID)	{		
		$data['pageheading'] = 'Brand Edit';
		$data['brand'] = $this->common->get_data_where_row('brand',['brand_ID'=>$brand_ID]);		
		$data['cjs'] = $this->cjs;
		$this->load->view($this->header);
		$this->load->view($this->template.'header');
		$this->load->view($this->template.'sidebar');
		$this->load->view($this->template.'heading',$data);
		$this->load->view($this->body.'edit',$data);
		$this->load->view($this->footer);
	}
	public function update($brand_ID) {
		$msg = '';
		$brand_name = $this->input->post('txtBrandName',TRUE);
		$update_data = [
		'brand_name'=>$brand_name,
		'brand_slug'=>createslug($brand_name),
		];
		$condition = ['brand_ID'=>$brand_ID];
		$update = $this->common->update_data('brand',$update_data,$condition);
		if($update == TRUE) {
			$msg = 'Brand has been successfully updated.';
			$this->session->set_flashdata('success',$msg);
		}
		redirect('brand-listing');
	}
	public function delete() {
		$msg = '';
		$brand_ID = $this->input->post('txtBrandId',TRUE);
		$update = [
		'status'=>0,
		];
		$condition = [
		'brand_ID'=>$brand_ID,
		];
		$update = $this->common->update_data('brand',$update,$condition);
		if($update == TRUE) {
			$msg = 'Brand has been successfully deleted.';
			$this->session->set_flashdata('success',$msg);
		}
		redirect('brand-listing');
	}
}
