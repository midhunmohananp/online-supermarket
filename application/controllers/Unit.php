<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unit extends My_Controller {

	public function __construct() {
		parent::__construct();
		$this->now = time();
		$this->template = 'template/';
		$this->cjs = ['Unit'];
		$this->body = 'unit/';
		$this->header = $this->template.'header/after_login';
		$this->footer = $this->template.'footer/after_login';
		
	}
	public function index()	{
		$this->add();
	}
	public function add()	{		
		$data['pageheading'] = 'Unit Add';
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
		$unit_name = $this->input->post('txtUnitName',TRUE);
		$unit_symbol = $this->input->post('txtUnitSymbol',TRUE);
		$insert = [
		'unit_name'=>$unit_name,
		'unit_symbol'=>$unit_symbol,
		'unit_slug'=>createslug($unit_name),
		'status'=>1,
		'date_created'=>unix_to_human($this->now,TRUE)
		];
		$id = $this->common->insert_data('unit_of_measure',$insert);
		if($id == TRUE) {
			$msg = 'Unit has been successfully added.';
			$this->session->set_flashdata('success',$msg);
		}
		redirect('unit-add');
	}
		public function listing()	{
		$data['units'] = $this->common->get_data_where('unit_of_measure',['status'=>1]);
		$data['pageheading'] = 'Unit List';
		$data['cjs'] = $this->cjs;
		$this->load->view($this->header);
		$this->load->view($this->template.'header');
		$this->load->view($this->template.'sidebar');
		$this->load->view($this->template.'heading',$data);
		$this->load->view($this->body.'list',$data);
		$this->load->view($this->footer);
	}
	public function edit($unit_ID)	{		
		$data['pageheading'] = 'Unit Edit';
		$data['unit'] = $this->common->get_data_where_row('unit_of_measure',['unit_ID'=>$unit_ID]);	
		$data['cjs'] = $this->cjs;
		$this->load->view($this->header);
		$this->load->view($this->template.'header');
		$this->load->view($this->template.'sidebar');
		$this->load->view($this->template.'heading',$data);
		$this->load->view($this->body.'edit',$data);
		$this->load->view($this->footer);
	}	
	public function update($unit_ID) {
		$msg = '';
		$unit_name = $this->input->post('txtUnitName',TRUE);
		$unit_symbol = $this->input->post('txtUnitSymbol',TRUE);
		$update_data = [
		'unit_name'=>$unit_name,
		'unit_symbol'=>$unit_symbol,
		'unit_slug'=>createslug($unit_name),
		];
		$condition = ['unit_ID'=>$unit_ID];
		$update = $this->common->update_data('unit_of_measure',$update_data,$condition);
		if($update == TRUE) {
			$msg = 'Unit has been successfully updated.';
			$this->session->set_flashdata('success',$msg);
		}
		redirect('unit-listing');
	}

}
