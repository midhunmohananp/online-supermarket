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
		
	
}


