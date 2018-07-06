<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

	public function saveUserRegistrationDetails($ary){
		if($this->db->insert('userdetails',$ary)){
			return true;
		} else {
			return false;
		}
	}
   public function loginpagedetails($log){
   	//if($this->db->insert('logtab',$log)){
			$this->db->set('Password',$log['password']);
			$this->db->where('SNo',$log['userid']);
			if($this->db->update('userdetails')){
				return true;
		} else {
			return false;
		}

	
   }
   public function deletedetailsusers($del){
   	$this->db->where('SNo',$del['userid']);
   	if($this->db->delete('userdetails')){
   		return true;
		} else {
			return false;
   	}
   }
    public function selectdetailsusers($sel){
   	$this->db->select('*');
   	$this->db->where('SNo',$sel['userid']);
   	$query=$this->db->get('userdetails');
   	$result=$query->result();
   	if(!empty($result)){
   		return $result;
		} else {
			return false;
   	}
   }
}