<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {


	public function __construct() {
		parent::__construct();	
		$this->load->model('product_m');			
		$this->load->model('customer_m');			
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
	public function check_user_email_excist() {

		$user_email = $this->input->post('txtUserEmail',TRUE);
		$user = $this->common->get_data_where_row('user_detail',['user_email'=>$user_email]);
		if($user == TRUE) {					
			$json =  "User email Already Excist";
		} else {
						$json = true;
		}
		echo json_encode($json);
	}
	public function check_tax_name_excist($tax_ID = NULL) {

		$tax_name = $this->input->post('txtTaxName',TRUE);
		$condition = [];
		$condition['tax_name']=$tax_name;
		if($tax_ID == TRUE) {
		$condition['tax_ID !=']=$tax_ID;
		}
		$tax = $this->common->get_data_where_row('tax',$condition);
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
			$json =  "Brand name already excist";
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
	public function check_unit_name_excist($unit_ID = NULL) {

		$unit_name = $this->input->post('txtUnitName',TRUE);
		$condition = [];
		$condition['unit_name'] = $unit_name;
		if($unit_ID == TRUE) {
		$condition['unit_ID !='] = $unit_ID;
		}
		$unit = $this->common->get_data_where_row('unit_of_measure',$condition);
		if($unit == TRUE) {					
			$json =  "unit name Already Excist";
		} else {
						$json = true;
		}
		echo json_encode($json);
	}
	public function customerDetails() {

		$search_name = $this->input->post('term',TRUE);
		$customers = $this->customer_m->customer_details($search_name);
		if($customers == TRUE) {
			$customer_details = [];
			foreach ($customers as $customer) {
				$name = $customer->first_name.' '.$customer->middle_name.' '.$customer->last_name;
				$customer_detail['label'] = $name;
				$customer_detail['value'] = $name;
				$customer_detail['id'] = $customer->customer_ID;
				$customer_detail['mobile_number'] = $customer->phone;
				$customer_detail['email'] = $customer->email;
				$customer_details [] = $customer_detail;
			}
			$response_data = [
				'status'=>true,
				'data'=>$customer_details
			];
		} else {
			$response_data = [
				'status'=>false
			];
		}
		echo json_encode($response_data);
	}
	public function productDetails($shop_ID)
	{
		$search_name = $this->input->post('term',TRUE);
		$products = $this->product_m->shopProductSearchByName($search_name,$shop_ID);
		if($products == TRUE) {
			$productDetails = [];
			foreach ($products as $product) {
				// $name = $customer->first_name.' '.$customer->middle_name.' '.$customer->last_name;
				$productDetail['label'] = $product->name;
				$productDetail['value'] = $product->name;
				$productDetail['store_ID'] = $product->store_ID;
				$productDetail['product_ID'] = $product->product_ID;
				$productDetail['name'] = $product->name;
				$productDetail['unit_price'] = $product->unit_price;
				$productDetail['stock'] = $product->stock;
				$productDetail['tax_rate'] = $product->tax_rate;
				$productDetails [] = $productDetail;
			}
			$response_data = [
				'status'=>true,
				'data'=>$productDetails
			];
		} else {
			$response_data = [
				'status'=>false
			];
		}		
		echo json_encode($response_data);
	}
}
