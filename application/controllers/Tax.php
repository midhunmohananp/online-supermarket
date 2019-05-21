<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tax extends My_Controller {

	public function __construct() {
		parent::__construct();
		$this->now = time();
		$this->template = 'template/';
		$this->cjs = ['Tax'];
		$this->body = 'tax/';
		$this->header = $this->template.'header/after_login';
		$this->footer = $this->template.'footer/after_login';

	}
	public function index()	{
		$this->add();
	}
	public function add()	{		
		$data['pageheading'] = 'Tax Add';
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
		$tax_name = $this->input->post('txtTaxName',TRUE);
		$tax_rate = $this->input->post('txtTaxRate',TRUE);
		$insert = [
		'tax_name'=>$tax_name,
		'tax_rate'=>$tax_rate,
		'tax_slug'=>createslug($tax_name),
		'status'=>1,
		'date_created'=>unix_to_human($this->now,TRUE)
		];
		$id = $this->common->insert_data('tax',$insert);
		if($id == TRUE) {
			$msg = 'Tax has been successfully added.';
			$this->session->set_flashdata('success',$msg);
		}
		redirect('tax-add');
	}
	public function listing()	{
		$data['taxs'] = $this->common->get_data_where('tax',['status'=>1]);
		$data['pageheading'] = 'Tax List';
		$data['cjs'] = $this->cjs;
		$this->load->view($this->header);
		$this->load->view($this->template.'header');
		$this->load->view($this->template.'sidebar');
		$this->load->view($this->template.'heading',$data);
		$this->load->view($this->body.'list',$data);
		$this->load->view($this->footer);
	}
	public function edit($tax_ID)	{		
		$data['pageheading'] = 'Tax Edit';
		$data['tax'] = $this->common->get_data_where_row('tax',['tax_ID'=>$tax_ID]);	
		$data['cjs'] = $this->cjs;
		$this->load->view($this->header);
		$this->load->view($this->template.'header');
		$this->load->view($this->template.'sidebar');
		$this->load->view($this->template.'heading',$data);
		$this->load->view($this->body.'edit',$data);
		$this->load->view($this->footer);
	}
	public function update($tax_ID) {
		$msg = '';
		$tax_name = $this->input->post('txtTaxName',TRUE);
		$tax_rate = $this->input->post('txtTaxRate',TRUE);
		$update_data = [
		'tax_name'=>$tax_name,
		'tax_rate'=>$tax_rate,
		'tax_slug'=>createslug($tax_name),
		];
		$condition = ['tax_ID'=>$tax_ID];
		$update = $this->common->update_data('tax',$update_data,$condition);
		if($update == TRUE) {
			$msg = 'Tax has been successfully updated.';
			$this->session->set_flashdata('success',$msg);
		}
		redirect('tax-listing');
	}
	public function delete() {
		$msg = '';
		$tax_ID = $this->input->post('txtTaxId',TRUE);
		$update_data = [
		'status'=>0,
		];
		$condition = ['tax_ID'=>$tax_ID];
		$update = $this->common->update_data('tax',$update_data,$condition);
		if($update == TRUE) {
			$msg = 'Tax has been successfully deleted.';
			$this->session->set_flashdata('success',$msg);
		}
		redirect('tax-listing');
	}
}
