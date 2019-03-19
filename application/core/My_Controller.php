<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');
class My_Controller extends CI_Controller
{
		protected $unix_date;
		protected $now;//current date
		protected $template;//template folder
		protected $header;//header folder
		protected $footer;//footer folder
		protected $body;//body folder
		protected $user_ID;//userid
		protected $shop_ID;//shopid
		protected $user_type_ID;//usertypeid
		protected $logged;//
		protected $curr_controller;
		protected $curr_method;
		protected $access_slug;
		protected $access_status;
		protected $cjs;
		public function __construct()
		{
			parent::__construct();
			if($this->session->has_userdata('bsw_log')) {
			 $this->logged = $this->session->userdata('bsw_log');
			 if(($this->logged['logged_in']==TRUE))
			 {
			 	$this->load->model('user_m');
			 	$this->load->model('access_m');
			 	$this->user_ID = $this->logged['user_ID'];
			 	$this->user_type_ID = $this->logged['type'];
			 	$user = $this->user_m->user($this->user_ID);
			 	$this->shop_ID = $user->shop_ID;		 	 
			 	$this->curr_controller = $this->router->fetch_class();		 	 
			 	$this->curr_method = $this->router->fetch_method();		 	 
			 	$this->access_slug = createslug($this->curr_controller.' '.$this->curr_method);
			 	$this->access = $this->access_m->check_grand_access($this->user_type_ID,$this->access_slug);
			 	$this->unix_date = unix_to_human(time(),TRUE);
			 	/*if($this->access == TRUE) {
			 		if($this->access->status == 1) {
			 		
			 		} else {
					 redirect('logout');
				 	}
			 	} else {
				 redirect('logout');
			 	}*/

			 } else {
				 redirect('logout');
			 }
		    } else {
			  redirect('logout');
		    }
		}
		

}