<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends My_Controller {


	public function __construct() {
		parent::__construct();
		$this->now = time();
		$this->template = 'template/';
				$this->cjs = ['User'];

		$this->body = 'user/';
		$this->header = $this->template.'header/after_login';
		$this->footer = $this->template.'footer/after_login';
	}
	public function index()	{
		$this->add();
	}
	public function add()	{	
		$data['user_types'] = $this->common->get_data_where('user_type',['status'=>1]);	
		$data['pageheading'] = 'User Add';
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

		$user_type_ID = $this->input->post('txtUserType',TRUE);
		$user_name = $this->input->post('txtUserName',TRUE);
		$user_password = $this->input->post('txtUserPassword',TRUE);

		$first_name = $this->input->post('txtUserFirstName',TRUE);
		$middle_name = $this->input->post('txtUserMiddleName',TRUE);
		$last_name = $this->input->post('txtUserLastName',TRUE);
		$user_email = $this->input->post('txtUserEmail',TRUE);
		$user_phone = $this->input->post('txtUserPhone',TRUE);
		$user_address = $this->input->post('txtUserAddress',TRUE);

		$insert = [
		'user_type_ID'=>$user_type_ID,	
		'shop_ID'=>$this->shop_ID,	
		'user_name'=>$user_name,	
		'user_password'=>password_hash($user_password,PASSWORD_DEFAULT),	
		'status'=>1,
		'date_created'=>unix_to_human($this->now,TRUE)
		];
		$user_ID = $this->common->insert_data('user',$insert);
		if($user_ID == TRUE) {
			$detail = [				
			'user_ID'=>$user_ID,	
			'first_name'=>$first_name,	
			'middle_name'=>$middle_name,	
			'last_name'=>$last_name,	
			'user_email'=>$user_email,	
			'user_phone'=>$user_phone,	
			'user_address'=>$user_address,			
			'status'=>1,
			'date_created'=>unix_to_human($this->now,TRUE)
			];
			$this->common->insert_data('user_detail',$detail);

			$msg = 'User has been successfully added.';
			$this->session->set_flashdata('success',$msg);
		}
		redirect('user-add');
	}
		public function listing()	{
		$data['users'] = $this->common->get_data_where('user_detail',['status'=>1]);
		$data['pageheading'] = 'User List';
		$data['cjs'] = $this->cjs;
		$this->load->view($this->header);
		$this->load->view($this->template.'header');
		$this->load->view($this->template.'sidebar');
		$this->load->view($this->template.'heading',$data);
		$this->load->view($this->body.'list',$data);
		$this->load->view($this->footer);
	}
}
