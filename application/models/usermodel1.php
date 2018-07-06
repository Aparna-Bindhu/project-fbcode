<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel1 extends CI_Model {

	public function saveUserRegistrationDetails($aryy){
		if($this->db->insert('userdetails',$aryy)){
			return true;
		} else {
			return false;
		}
	}
	public function saveUserloginDetails($aray){
		//if($this->db->insert('userdetails',$aray)){
			$this->db->select('*');
			$this->db->where('email',$aray['email']);
			$this->db->where('password',$aray['password']);
			$query=$this->db->get('userdetails');
            if($query->num_rows()==1){

			return true;
		} else {
			return false;
		}
	}

}