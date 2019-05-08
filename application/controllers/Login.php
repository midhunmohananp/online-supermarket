<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	private $now;//current date
	private $template;//template folder
	private $header;//header folder
	private $footer;//footer folder
	private $body;//body folder

	public function __construct() {
		parent::__construct();
		$this->now = time();
		$this->template = 'template/';
		$this->body = 'login/';
		$this->header = $this->template.'header/before_login';
		$this->footer = $this->template.'footer/before_login';

		//models


	}
	public function index()	{
		$this->login();
	}
	public function login()	{
		$this->load->view($this->header);
		$this->load->view($this->body.'login');
		$this->load->view($this->footer);
	}
	public function login_check()	{
		$user_name = $this->input->post('txtUserName',TRUE);
		$user_password = $this->input->post('txtUserPassword',TRUE);
		 // echo password_hash($user_password,PASSWORD_DEFAULT);
		$condition = [
		'user_name'=>$user_name,
		'status'=>1
		];	
		$user = $this->common->get_data_where_row('user',$condition);
		if($user == TRUE){
			$hash = $user->user_password;
			if(password_verify($user_password,$hash) == TRUE) {
				$login_data = [
				'user_ID' => $user->user_ID,
				'type'=>$user->user_type_ID,
                'logged_in' => TRUE
				];

				$this->session->set_userdata('bsw_log', $login_data);
				redirect('dashboard');
			} else {
				$msg = 'Username and password not accepted';
				$this->session->set_flashdata('error',$msg);
				redirect('login');
			}
		} else {
			$msg = 'Username and password not accepted';
			$this->session->set_flashdata('error',$msg);
			redirect('login');
		}
	}
	public function logout() {
		$array_items = array('bsw_log');
        $this->session->unset_userdata($array_items);
		$this->session->sess_destroy();
		redirect('login');
	}
}
