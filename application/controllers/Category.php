<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends My_Controller {

	public function __construct() {
		parent::__construct();
		$this->now = time();
		$this->template = 'template/';
		$this->body = 'category/';
		$this->cjs = ['Category'];
		$this->header = $this->template.'header/after_login';
		$this->footer = $this->template.'footer/after_login';
		//models
		$this->load->model('category_m');
	}
	public function index()	{
		$this->add();
	}
	public function add()	{
		$data['categories'] = $this->category_m->get_active_categories();
		$data['pageheading'] = 'Category Add';
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
		$category_name = $this->input->post('txtCategoryName',TRUE);
		$parent_category_ID = $this->input->post('txtParentCategory',TRUE);
		$insert = [
		'parent_category_ID'=>$parent_category_ID,
		'category_name'=>$category_name,
		'category_slug'=>createslug($category_name),
		'status'=>1,
		'date_created'=>unix_to_human($this->now,TRUE)
		];
		$id = $this->common->insert_data('category',$insert);
		if($id == TRUE) {
			$msg = 'Category has been successfully added.';
			$this->session->set_flashdata('success',$msg);
		}
		redirect('category-add');
	}
	public function listing()	{
		$data['categories'] = $this->category_m->get_active_categories();
		$data['pageheading'] = 'Category List';
		$data['cjs'] = $this->cjs;
		$this->load->view($this->header);
		$this->load->view($this->template.'header');
		$this->load->view($this->template.'sidebar');
		$this->load->view($this->template.'heading',$data);
		$this->load->view($this->body.'list',$data);
		$this->load->view($this->footer);
	}
	public function edit($category_ID)	{
		$data['categories'] = $this->category_m->get_active_categories();
		$data['pageheading'] = 'Category Edit';
		$data['cjs'] = $this->cjs;
		$data['category'] = $this->common->get_data_where_row('category',['category_ID'=>$category_ID]);
		$this->load->view($this->header);
		$this->load->view($this->template.'header');
		$this->load->view($this->template.'sidebar');
		$this->load->view($this->template.'heading',$data);
		$this->load->view($this->body.'edit',$data);
		$this->load->view($this->footer);
	}
	public function update($category_ID) {
		$msg = '';
		$category_name = $this->input->post('txtCategoryName',TRUE);
		$parent_category_ID = $this->input->post('txtParentCategory',TRUE);
		$insert = [
		'parent_category_ID'=>$parent_category_ID,
		'category_name'=>$category_name,
		'category_slug'=>createslug($category_name),
		];
		$condition = ['category_ID'=>$category_ID];
		$update = $this->common->update_data('category',$insert,$condition);
		if($update == TRUE) {
			$msg = 'Category has been successfully updated.';
			$this->session->set_flashdata('success',$msg);
		}
		redirect('category-listing');
	}
}
