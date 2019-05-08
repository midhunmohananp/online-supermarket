<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Product_m extends CI_Model {

	public function shopProductSearchByName($name,$shop_ID) {
		$this->db->select('s.store_ID,p.product_ID,p.product_name as name,s.unit_price,s.quantity as stock,t.tax_rate');
		$this->db->from('store s');
		$this->db->join('product p','p.product_ID = s.product_ID');
		$this->db->join('tax t','t.tax_ID = s.tax_ID');
		$this->db->like('p.product_name',$name,'after');
		$this->db->where('s.shop_ID',$shop_ID);
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
	
}


