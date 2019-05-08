<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Customer_m extends CI_Model {

	public function customer_details($name) {
		$this->db->select('customer.*');
		$this->db->from('customer');
		$this->db->like('customer.first_name',$name,'after');
		$this->db->where('customer.status',1);
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
