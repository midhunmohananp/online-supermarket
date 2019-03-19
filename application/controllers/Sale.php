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
		$this->load->view($this->header);
		$this->load->view($this->template.'header');
		$this->load->view($this->template.'sidebar');
		$this->load->view($this->template.'heading',$data);
		$this->load->view($this->body.'new_sale',$data);
		$this->load->view($this->footer);
	}
}
