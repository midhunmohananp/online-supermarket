<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Report_m extends CI_Model {

	public function getInvoices($customer_ID=null) {
		$this->db->select('i.*,c.first_name,c.email,c.phone,c.customer_ID');
		$this->db->from('invoice i');
		$this->db->join('customer c','i.customer_ID = c.customer_ID');
		if($customer_ID == true) {
			$this->db->where('c.customer_ID',$customer_ID);
		}
		$this->db->order_by('i.invoice_ID','desc');
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

	public function getStockProducts($shop_ID=null,$sku=null,$product_ID=null) {
		$this->db->select('p.*,c.category_name,uom.unit_name,s.store_ID,s.sku,t.tax_rate,t.tax_name,s.quantity,s.unit_price,s.purchase_rate,s.date_created as stock_date_created,s.sku');
		$this->db->from('product p');
		$this->db->join('category c','p.category_ID = c.category_ID');
		$this->db->join('store s','p.product_ID = s.product_ID');
		$this->db->join('tax t','t.tax_ID = s.tax_ID');
		$this->db->join('unit_of_measure uom','p.uom_ID = uom.unit_ID');
		if($shop_ID) {
			$this->db->where('s.shop_ID',$shop_ID);
		}
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
		
	
}


