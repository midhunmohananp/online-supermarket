<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends My_Controller {


	public function __construct() {
		parent::__construct();
		$this->now = time();
		$this->template = 'template/';
		$this->cjs = ['Report'];
		$this->body = 'report/';
		$this->header = $this->template.'header/after_login';
		$this->footer = $this->template.'footer/after_login';
		$this->load->model('report_m');
	}
	public function index()	{
		$this->new_sale();
	}
	public function sale()
	{
		$data['pageheading'] = 'Sale Report';
		$data['cjs'] = $this->cjs;
		$data['user_name'] = $this->user_name;
		$data['c_shop_ID'] = $this->shop_ID;
		$this->load->view($this->header);
		$this->load->view($this->template.'header');
		$this->load->view($this->template.'sidebar');
		$this->load->view($this->template.'heading',$data);
		$this->load->view($this->body.'sale',$data);
		$this->load->view($this->footer);
	}
	public function getSaleReprort()
	{
		$invoices = $this->report_m->getInvoices();
		$data = [
			"data"=>$invoices
		];
		// $responce = [
		//   "draw" => 1,
		//   "recordsTotal" => 57,
		//   "recordsFiltered" => 57,
		//   "data"=>$invoices
		// ];
		$responce =  array(
"sEcho" => 1,
"iTotalRecords" => count($invoices),
"iTotalDisplayRecords" => count($invoices),
"aaData" => $invoices
);
		echo json_encode($responce);
	}
}
