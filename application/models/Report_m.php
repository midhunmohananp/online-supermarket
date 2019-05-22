<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Report_m extends CI_Model {

	public function getInvoices() {
		$this->db->select('item.invoice_ID,item.store_Id,item.shop_ID');
		$this->db->from('invoice_item item');
		$this->db->join('product p','p.product_ID = item.product_ID');
		$this->db->order_by('item.invoice_item_ID','asc');
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


