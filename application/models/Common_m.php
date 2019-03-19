<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

Class Common_m extends CI_Model {
	function get_data($table)
	{
		$query = $this->db->get($table);
		return $query->result();
	}
	function get_data_where($table,$cond)
	{
		$query = $this->db->get_where($table,$cond);
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
	function get_data_row($table)
	{
		$query = $this->db->get($table);
		return $query->row();
	}
	function get_data_where_row($table,$cond)
	{
		$query = $this->db->get_where($table,$cond);
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
	function insert_data($table,$data)
	{
		if($this->db->insert($table, $data) == TRUE)
		{
			$insert_id = $this->db->insert_id();
			return  $insert_id;
		}
		else
		{
			return FALSE;
		}
	}
	function update_data($table,$data,$cond)
	{
		if($this->db->update($table, $data, $cond) == TRUE)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	function delete_data($table,$cond)
	{
		if($this->db->delete($table, $cond)== TRUE)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

}



