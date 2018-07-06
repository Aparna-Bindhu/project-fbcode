<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tatomodel extends CI_Model {

	public function saveUseraccountDetails($tary1){
		if($this->db->insert('tatotable',$tary1)){
			return true;
		} else {
			return false;
		}
	}
	public function checklogindetails($tary){
			$this->db->select('*');
			$this->db->where('Email',$tary['username']);
			$this->db->where('Password',$tary['password']);
			$query=$this->db->get('tatotable');
            if($query->num_rows()==1){

			return true;
		} else {
			return false;
		}
	}
	public function changepassworddetails($ary){
		$this->db->set('Password',$ary['password']);
			$this->db->where('Email',$ary['username']);
			if($this->db->update('tatotable')){
				return true;
		} else {
			return false;
		}

}
}