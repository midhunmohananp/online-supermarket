<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Category_m extends CI_Model {

	public function get_active_categories() {
		$this->db->select('cat.category_ID,cat.parent_category_ID,cat.category_name,cat.category_slug');
		$this->db->from('category cat');
		$this->db->where('cat.status',1);
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

