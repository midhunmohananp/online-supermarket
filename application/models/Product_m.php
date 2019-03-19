<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Product_m extends CI_Model {

	public function shopProductSearchByName($name) {
		$this->db->select('p.product_ID,p.product_name');
		$this->db->from('product p');
		$this->db->like('product_name',$name);
		// $this->db->join('shop s','s.product_ID = p.product_ID');
		// $this->db->where('s.shop_ID',$shop_ID);
		$this->db->where('p.status',1);
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


