<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->now = time();
		$this->template = 'template/';
		$this->body = 'dashboard/';
		$this->header = $this->template.'header/after_login';
		$this->footer = $this->template.'footer/after_login';

	}
	public function index()	{
		$this->dashboard();
	}
	public function dashboard()	{
		$this->load->view($this->header);
		$this->load->view($this->template.'header');
		$this->load->view($this->template.'sidebar');
		$this->load->view($this->body.'dashboard');
		$this->load->view($this->footer);
	}
}
