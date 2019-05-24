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
		$this->load->model('product_m');
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
	public function stock()
	{
		$data['pageheading'] = 'Stock Report';
		$data['cjs'] = $this->cjs;
		$data['user_name'] = $this->user_name;
		$data['c_shop_ID'] = $this->shop_ID;
		$this->load->view($this->header);
		$this->load->view($this->template.'header');
		$this->load->view($this->template.'sidebar');
		$this->load->view($this->template.'heading',$data);
		$this->load->view($this->body.'stock',$data);
		$this->load->view($this->footer);
	}
	public function getSaleReport()
	{
		$customer_ID = $this->input->post('customer_ID',TRUE);
		$date_from = $this->input->post('date_from',TRUE);
		$date_to = $this->input->post('date_to',TRUE);
		$invoices = $this->report_m->getInvoices($customer_ID);
		$data = [
			"data"=>$invoices
		];
		$responce =  array(
		"sEcho" => 1,
		"iTotalRecords" => count($invoices),
		"iTotalDisplayRecords" => count($invoices),
		"aaData" => $invoices
		);
		echo json_encode($responce);
	}
	public function getStockReport()
	{
		$customer_ID = $this->input->post('customer_ID',TRUE);
		$date_from = $this->input->post('date_from',TRUE);
		$date_to = $this->input->post('date_to',TRUE);
		$stocks = $this->report_m->getStockProducts();
		$data = [
			"data"=>$stocks
		];
		$responce =  array(
		"sEcho" => 1,
		"iTotalRecords" => count($stocks),
		"iTotalDisplayRecords" => count($stocks),
		"aaData" => $stocks
		);
		echo json_encode($responce);
	}
}
