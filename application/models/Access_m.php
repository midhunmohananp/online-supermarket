<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Access_m extends CI_Model {

	public function check_grand_access($user_type_ID,$access_slug) {
		$this->db->select('ga.status');
		$this->db->from('grand_access ga');
		$this->db->join('access acc','acc.access_ID = ga.access_ID');
		$this->db->where('acc.access_slug',$access_slug);
		$this->db->where('ga.user_type_ID',$user_type_ID);
		$this->db->where('ga.status',1);
		$query = $this->db->get();
		if($query->num_rows()==1)
		{
			$result = $query->row();
			return $result;
		}
		else
		{
		   return FALSE;
		}
	}
}


