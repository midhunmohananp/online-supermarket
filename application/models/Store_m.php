<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Store_m extends CI_Model {

	public function qty_update($store_ID,$qty) {
		
		$data = [
			'quantity'=>'quantity -'.$qty
		];

		$this->db->set('quantity','quantity-'.$qty,false);
		$this->db->where('store_ID',$store_ID);
		$update = $this->db->update('store');
		if($update == TRUE)
		{
			return TRUE;
		}
		else
		{
		   return FALSE;
		}
	}
	
}


