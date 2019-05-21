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
	public function getInvoice($invoice_ID)
	{
		$this->db->select('i.* ');
		$this->db->from('invoice i ');
		// $this->db->join('category c','p.category_ID = c.category_ID');
		$this->db->where('i.invoice_ID',$invoice_ID);
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
	public function getInvoiceItems($invoice_ID) {
		$this->db->select('item.*,p.*');
		$this->db->from('invoice_item item');
		$this->db->join('product p','p.product_ID = item.product_ID');
		$this->db->order_by('item.invoice_item_ID','asc');
		$this->db->where('item.invoice_ID',$invoice_ID);
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


