<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Product_m extends CI_Model {

	public function shopProductSearchByName($name,$shop_ID) {
		$this->db->select('s.store_ID,p.product_ID,p.product_name as name,s.unit_price,s.quantity as stock,t.tax_rate');
		$this->db->from('product p');
		$this->db->join('store s','s.product_ID = p.product_ID');
		$this->db->join('tax t','t.tax_ID = s.tax_ID');
		$this->db->like('p.product_name',$name,'after');
		$this->db->where('s.shop_ID',$shop_ID);
		$this->db->where('s.quantity >',0);
		$this->db->where('p.status',1);
		$this->db->where('s.status',1);
		$this->db->distinct();
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$result = $query->result();
			return $result;
		}
		else
		{
		   return FALSE;
		}
	}
	public function getProducts() {
		$this->db->select('p.*,c.category_name,uom.unit_name');
		$this->db->from('product p');
		$this->db->join('category c','p.category_ID = c.category_ID');
		$this->db->join('unit_of_measure uom','p.uom_ID = uom.unit_ID');
		$this->db->order_by('p.status','DESC');
		$this->db->order_by('p.date_created','DESC');
		$this->db->distinct();
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$result = $query->result();
			return $result;
		}
		else
		{
		   return FALSE;
		}
	}
	public function getShopProducts($shop_ID) {
		$this->db->select('p.*,c.category_name,uom.unit_name,s.store_ID,s.sku,t.tax_rate,t.tax_name,s.quantity,s.unit_price,s.purchase_rate,s.date_created as stock_date_created');
		$this->db->from('product p');
		$this->db->join('category c','p.category_ID = c.category_ID');
		$this->db->join('store s','p.product_ID = s.product_ID');
		$this->db->join('tax t','t.tax_ID = s.tax_ID');
		$this->db->join('unit_of_measure uom','p.uom_ID = uom.unit_ID');
		$this->db->where('s.shop_ID',$shop_ID);
		$this->db->where('s.status',1);
		$this->db->order_by('p.status','DESC');
		$this->db->order_by('p.date_created','DESC');
		$this->db->distinct();
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$result = $query->result();
			return $result;
		}
		else
		{
		   return FALSE;
		}
	}
	public function getShopProduct($shop_ID,$store_ID) {
		$this->db->select('p.*,c.category_name,uom.unit_name,s.store_ID,s.sku,t.tax_rate,t.tax_name,s.quantity,s.unit_price,s.purchase_rate,s.date_created as stock_date_created');
		$this->db->from('product p');
		$this->db->join('category c','p.category_ID = c.category_ID');
		$this->db->join('store s','p.product_ID = s.product_ID');
		$this->db->join('tax t','t.tax_ID = s.tax_ID');
		$this->db->join('unit_of_measure uom','p.uom_ID = uom.unit_ID');
		$this->db->where('s.store_ID',$store_ID);
		$this->db->where('s.shop_ID',$shop_ID);
		$query = $this->db->get();
		if($query->num_rows() == 1)
		{
			$result = $query->row();
			return $result;
		}
		else
		{
		   return FALSE;
		}
	}
	
}


