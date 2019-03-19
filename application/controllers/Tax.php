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
}
