<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usernewmodel extends CI_Model {

	public function getAllUsersCount()
	{
		$query=$this->db->get('tatotable');
		if(!empty($query->num_rows())){
			return $query->num_rows(); 
		}else{
			return 0;
		}
	}

	public function getAllUsers($limit,$start)
	{
		$this->db->select('name');
		$this->db->limit($limit,$start);
		$query=$this->db->get('tatotable');
		if(!empty($query->result())){
            return $query->result();
        } else{
            return false;
        }
	}
}