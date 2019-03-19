<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class User_m extends CI_Model {

	public function user_details($user_ID) {
		$this->db->select('ud.First_name,ud.middle_name,ud.last_name,ud.user_email,ud.user_phone,ud.user_address');
		$this->db->from('user_detail ud');
		$this->db->where('ud.user_ID',$user_ID);
		$this->db->where('ud.status',1);
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
	public function user_name($user_ID) {
		$this->db->select('user.user_name,ud.first_name,ud.middle_name,ud.last_name');
		$this->db->from('user user');
		$this->db->join('user_detail ud','user.user_ID = ud.user_ID');
		$this->db->where('ud.user_ID',$user_ID);
		$this->db->where('ud.status',1);
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
	public function user($user_ID) {
		$this->db->select('user.user_ID,user.shop_ID,user.user_type_ID');
		$this->db->from('user user');
		$this->db->where('user.user_ID',$user_ID);
		$this->db->where('user.status',1);
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
