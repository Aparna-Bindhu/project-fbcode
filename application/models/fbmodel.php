<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class fbmodel extends CI_Model {
	public function checklogindetails($loary){
			$this->db->select('*');
			$this->db->where('Email',$loary['email']);
			$this->db->where('Password',$loary['password']);
			$query=$this->db->get('fbusertable');
            if($query->num_rows()==1){

			return true;
		} else {
			return false;
		}
	}
public function saveUseraccountDetails($tary1){
		if($this->db->insert('fbusertable',$fbary)){
			return true;
		} else {
			return false;
		}
	}
}