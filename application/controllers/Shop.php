<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends My_Controller {

	public function __construct() {
		parent::__construct();
		$this->now = time();
		$this->template = 'template/';
		$this->cjs = ['Shop'];
		$this->body = 'shop/';
		$this->header = $this->template.'header/after_login';
		$this->footer = $this->template.'footer/after_login';

	}
	public function index()	{
		$this->add();
	}
	public function add()	{
		$data['pageheading'] = 'Shop Add';
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
		$shop_name = $this->input->post('txtShopName',TRUE);
		$shop_location = $this->input->post('txtShopLocation',TRUE);
		$shop_address = $this->input->post('txtShopAddress',TRUE);
		$insert = [
		'shop_name'=>$shop_name,
		'shop_location'=>$shop_location,
		'shop_address'=>$shop_address,
		'status'=>1,
		'shop_slug'=>createslug($shop_location),
		'date_created'=>unix_to_human($this->now,TRUE)
		];
		$id = $this->common->insert_data('shop',$insert);
		if($id == TRUE) {
			$msg = 'Shop has been successfully added.';
			$this->session->set_flashdata('success',$msg);
		}
		redirect('shop-add');
	}
	public function listing()	{
		$data['cjs'] = $this->cjs;
		$data['shops'] = $this->common->get_data_where('shop',['status'=>1]);
		$data['pageheading'] = 'Shop List';
		$this->load->view($this->header);
		$this->load->view($this->template.'header');
		$this->load->view($this->template.'sidebar');
		$this->load->view($this->template.'heading',$data);
		$this->load->view($this->body.'list',$data);
		$this->load->view($this->footer);
	}
	public function edit($shop_ID)	{
		$data['pageheading'] = 'Shop Edit';
		$data['cjs'] = $this->cjs;
		$data['shop'] = $this->common->get_data_where_row('shop',['shop_ID'=>$shop_ID]);
		$this->load->view($this->header);
		$this->load->view($this->template.'header');
		$this->load->view($this->template.'sidebar');
		$this->load->view($this->template.'heading',$data);
		$this->load->view($this->body.'edit',$data);
		$this->load->view($this->footer);
	}
	public function update($shop_ID) {
		$msg = '';
		$shop_name = $this->input->post('txtShopName',TRUE);
		$shop_location = $this->input->post('txtShopLocation',TRUE);
		$shop_address = $this->input->post('txtShopAddress',TRUE);
		$insert = [
		'shop_name'=>$shop_name,
		'shop_location'=>$shop_location,
		'shop_address'=>$shop_address,
		'shop_slug'=>createslug($shop_location)
		];
		$condition = ['shop_id'=>$shop_ID];
		$update = $this->common->update_data('shop',$insert,$condition);
		if($update == TRUE) {
			$msg = 'Shop has been successfully updated.';
			$this->session->set_flashdata('success',$msg);
		}
		redirect('shop-edit/'.$shop_ID);
	}
	public function delete() {
		$msg = '';
		$shop_ID = $this->input->post('txtShopId',TRUE);
		$delete = [
		'shop_ID'=>$shop_ID,
		];
		$update = $this->common->delete_data('shop',$delete);
		if($update == TRUE) {
			$msg = 'Shop has been successfully deleted.';
			$this->session->set_flashdata('success',$msg);
		}
		redirect('shop-listing');
	}
}
