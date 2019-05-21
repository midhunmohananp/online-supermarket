<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends My_Controller {

	public function __construct() {
		parent::__construct();
		$this->now = time();
		$this->template = 'template/';
		$this->cjs = ['Customer'];
		$this->body = 'customer/';
		$this->header = $this->template.'header/after_login';
		$this->footer = $this->template.'footer/after_login';

	}
	public function index()	{
		$this->add();
	}
	public function add()	{		
		$data['pageheading'] = 'Customer Add';
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
		$first_name = $this->input->post('txtCustomerFirstName',TRUE);
		$middle_name = $this->input->post('txtCustomerMiddleName',TRUE);
		$last_name = $this->input->post('txtCustomerLastName',TRUE);
		$email = $this->input->post('txtCustomerEmail',TRUE);
		$phone = $this->input->post('txtCustomerPhone',TRUE);
		$whatsapp = $this->input->post('txtCustomerWhatsApp',TRUE);
		$gender = $this->input->post('txtCustomerGender',TRUE);
		$dob = $this->input->post('txtCustomerDob',TRUE);
		$occupation = $this->input->post('txtCustomerOccupation',TRUE);
		$address = $this->input->post('txtCustomerAddress',TRUE);
		$landmark = $this->input->post('txtCustomerLandmark',TRUE);

		$insert = [
		'first_name'=>$first_name,
		'middle_name'=>$middle_name,
		'last_name'=>$last_name,
		'email'=>$email,
		'phone'=>$phone,
		'whatsapp'=>$whatsapp,
		'dob'=>$dob,
		'gender'=>$gender,
		'occupation'=>$occupation,
		'address'=>$address,
		'landmark'=>$landmark,
		'customer_slug'=>createslug($first_name.$email),
		'status'=>1,
		'date_created'=>unix_to_human($this->now,TRUE)
		];

		$id = $this->common->insert_data('customer',$insert);
		if($id == TRUE) {
			$msg = 'Customer has been successfully added.';
			$this->session->set_flashdata('success',$msg);
		}
		redirect('customer-add');
	}
		public function listing()	{
		$data['cjs'] = $this->cjs;
		$data['customers'] = $this->common->get_data_where('customer',['status'=>1]);
		$data['pageheading'] = 'Customer List';
		$this->load->view($this->header);
		$this->load->view($this->template.'header');
		$this->load->view($this->template.'sidebar');
		$this->load->view($this->template.'heading',$data);
		$this->load->view($this->body.'list',$data);
		$this->load->view($this->footer);
	}
	public function edit($customer_ID)	{		
		$data['pageheading'] = 'Customer Edit';
		$data['cjs'] = $this->cjs;
		$data['customer'] = $this->common->get_data_where_row('customer',['customer_ID'=>$customer_ID]);
		$this->load->view($this->header);
		$this->load->view($this->template.'header');
		$this->load->view($this->template.'sidebar');
		$this->load->view($this->template.'heading',$data);
		$this->load->view($this->body.'edit',$data);
		$this->load->view($this->footer);
	}	
	public function update($customer_ID) {
		$msg = '';
		$first_name = $this->input->post('txtCustomerFirstName',TRUE);
		$middle_name = $this->input->post('txtCustomerMiddleName',TRUE);
		$last_name = $this->input->post('txtCustomerLastName',TRUE);
		$email = $this->input->post('txtCustomerEmail',TRUE);
		$phone = $this->input->post('txtCustomerPhone',TRUE);
		$whatsapp = $this->input->post('txtCustomerWhatsApp',TRUE);
		$gender = $this->input->post('txtCustomerGender',TRUE);
		$dob = $this->input->post('txtCustomerDob',TRUE);
		$occupation = $this->input->post('txtCustomerOccupation',TRUE);
		$address = $this->input->post('txtCustomerAddress',TRUE);
		$landmark = $this->input->post('txtCustomerLandmark',TRUE);

		$update = [
		'first_name'=>$first_name,
		'middle_name'=>$middle_name,
		'last_name'=>$last_name,
		'email'=>$email,
		'phone'=>$phone,
		'whatsapp'=>$whatsapp,
		'dob'=>$dob,
		'gender'=>$gender,
		'occupation'=>$occupation,
		'address'=>$address,
		'landmark'=>$landmark,
		'customer_slug'=>createslug($first_name.$email),
		'status'=>1,
		'date_created'=>unix_to_human($this->now,TRUE)
		];
		$condition = [
		'customer_ID'=>$customer_ID,
		];
		$update = $this->common->update_data('customer',$update,$condition);
		if($update == TRUE) {
			$msg = 'Customer has been successfully added.';
			$this->session->set_flashdata('success',$msg);
		}
		redirect('customer-listing');
	}
	public function delete() {
		$msg = '';
		$customer_ID = $this->input->post('txtCustomerId',TRUE);
		$update = [
		'status'=>0,
		];
		$condition = [
		'customer_ID'=>$customer_ID,
		];
		$update = $this->common->update_data('customer',$update,$condition);
		if($update == TRUE) {
			$msg = 'Customer has been successfully deleted.';
			$this->session->set_flashdata('success',$msg);
		}
		redirect('customer-listing');
	}
	
}
