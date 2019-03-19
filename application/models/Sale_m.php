<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Sale_m extends CI_Model {

	public function getInvoiceNumber() {
		$this->db->select_max('invoice_ID');
		$this->db->from('invoice');
		$this->db->where('status',1);
		$query = $this->db->get();
		if($query->num_rows()==1)
		{
			$result = $query->row();
			return $result->invoice_ID+1;
		}
		else
		{
		   return 0+1;
		}
	}
	
}


