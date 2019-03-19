<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Access extends My_Controller {


	public function __construct() {
		parent::__construct();
		$this->now = time();
		$this->template = 'template/';
		$this->body = 'access/';
		$this->header = $this->template.'header/after_login';
		$this->footer = $this->template.'footer/after_login';
	}
	public function index()	{
		$this->add();
	}
	public function add()	{		
		$data['pageheading'] = 'Access Add';
		$this->load->view($this->header);
		$this->load->view($this->template.'header');
		$this->load->view($this->template.'sidebar');
		$this->load->view($this->template.'heading',$data);
		$this->load->view($this->body.'add',$data);
		$this->load->view($this->footer);
	}
	public function insert() {
		$msg = '';
		$access_name = $this->input->post('txtAccessName',TRUE);
		$access_value = $this->input->post('txtAccessValue',TRUE);
		$insert = [
		'access_name'=>$access_name,
		'access_value'=>$access_value,
		'access_slug'=>createslug($access_name),
		'status'=>1,
		'date_created'=>unix_to_human($this->now,TRUE)
		];
		$id = $this->common->insert_data('access',$insert);
		if($id == TRUE) {
			$msg = 'Access has been successfully added.';
			$this->session->set_flashdata('success',$msg);
		}
		redirect('access-add');
	}
	public function grand() {
		$data['pageheading'] = 'Access Grand';
		$data['access_types'] = $this->common->get_data_where('access',['status'=>1]);
		$data['user_types'] = $this->common->get_data_where('user_type',['status'=>1]);
		$this->load->view($this->header);
		$this->load->view($this->template.'header');
		$this->load->view($this->template.'sidebar');
		$this->load->view($this->template.'heading',$data);
		$this->load->view($this->body.'grand',$data);
		$this->load->view($this->footer);
	}
	public function access_grand_insert() {
		$msg = '';
		$access_name = $this->input->post('txtAccessName',TRUE);
		$user_type = $this->input->post('txtUserType',TRUE);
		$insert = [
		'user_type_ID'=>$user_type,
		'access_ID'=>$access_name,
		'status'=>1,
		'date_created'=>unix_to_human($this->now,TRUE)
		];
		$id = $this->common->insert_data('grand_access',$insert);
		if($id == TRUE) {
			$msg = 'Access has been granded successfully added.';
			$this->session->set_flashdata('success',$msg);
		}
		redirect('access-grand');
	}
}
