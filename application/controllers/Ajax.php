<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {


	public function __construct() {
		parent::__construct();	
		$this->load->model('product_m');			
	}
	public function check_shop_excist_location($shop_ID = NULL) {

		$shop_location = $this->input->post('txtShopLocation',TRUE);
		$condition = [];
		$condition['shop_location'] = $shop_location;
		if($shop_ID == TRUE) {
		$condition['shop_id !='] = $shop_ID;
		}

		$shop = $this->common->get_data_where_row('shop',$condition);
		if($shop == TRUE) {					
			$json =  "Shop Already Excist";
		} else {
						$json = true;
		}
		echo json_encode($json);
	}
	public function check_product_sku_excist() {

		$sku = $this->input->post('txtProductSKU',TRUE);
		$product = $this->common->get_data_where_row('store',['sku'=>$sku]);
		if($product == TRUE) {					
			$json =  "Product SKU Already Excist";
		} else {
						$json = true;
		}
		echo json_encode($json);
	}
	public function check_product_hsn_excist() {

		$product_hsn = $this->input->post('txtProductHSN',TRUE);
		$product = $this->common->get_data_where_row('product',['product_hsn'=>$product_hsn]);
		if($product == TRUE) {					
			$json =  "Product HSN Already Excist";
		} else {
						$json = true;
		}
		echo json_encode($json);
	}
	public function check_user_name_excist() {

		$user_name = $this->input->post('txtUserName',TRUE);
		$user = $this->common->get_data_where_row('user',['user_name'=>$user_name]);
		if($user == TRUE) {					
			$json =  "User name Already Excist";
		} else {
						$json = true;
		}
		echo json_encode($json);
	}
	public function check_user_eamil_excist() {

		$user_email = $this->input->post('txtUserEmail',TRUE);
		$user = $this->common->get_data_where_row('user',['user_email'=>$user_email]);
		if($user == TRUE) {					
			$json =  "User email Already Excist";
		} else {
						$json = true;
		}
		echo json_encode($json);
	}
	public function check_tax_name_excist() {

		$tax_name = $this->input->post('txtTaxName',TRUE);
		$tax = $this->common->get_data_where_row('tax',['tax_name'=>$tax_name]);
		if($tax == TRUE) {					
			$json =  "Tax name Already Excist";
		} else {
						$json = true;
		}
		echo json_encode($json);
	}
	public function check_brand_name_excist($brand_ID = NULL) {

		$brand_name = $this->input->post('txtBrandName',TRUE);
		$condition = [];
		$condition['brand_name']=$brand_name;
		if($brand_ID == TRUE) {
		$condition['brand_ID !=']=$brand_ID;
		}
		$brand = $this->common->get_data_where_row('brand',$condition);
		if($brand == TRUE) {					
			$json =  "brand name Already Excist";
		} else {
						$json = true;
		}
		echo json_encode($json);
	}
	public function check_category_name_excist($category_ID = NULL) {

		$category_name = $this->input->post('txtCategoryName',TRUE);
		$condition = [];
		$condition['category_name'] = $category_name;
		if($category_ID == TRUE) {
		$condition['category_ID !='] = $category_ID;
		}
		$category = $this->common->get_data_where_row('category',$condition);
		if($category == TRUE) {					
			$json =  "category name Already Excist";
		} else {
						$json = true;
		}
		echo json_encode($json);
	}
	public function check_unit_name_excist() {

		$unit_name = $this->input->post('txtUnitName',TRUE);
		$unit = $this->common->get_data_where_row('unit_of_measure',['unit_name'=>$unit_name]);
		if($unit == TRUE) {					
			$json =  "unit name Already Excist";
		} else {
						$json = true;
		}
		echo json_encode($json);
	}
	public function shop_product_search_by_name() {
		/*
			shopid
			return
		*/	$json = [];
			// $shop_ID = $this->input->post('shop_id',TRUE);
			$name = $this->input->get('q',TRUE);
			$products = $this->product_m->shopProductSearchByName($name);
			if($products == TRUE) {
				$json = $products;
			} 
			echo json_encode($json);
	}
	//bn0rwpkz0m71S
}
