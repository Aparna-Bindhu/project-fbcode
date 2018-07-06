<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tatocontroller extends CI_Controller {

/**
* Index Page for this controller.
*
* Maps to the following URL
* 		http://example.com/index.php/welcome
*	- or -
* 		http://example.com/index.php/welcome/index
*	- or -
http://example.com/index.php/welcome/index
* Since this controller is set as the default controller in
* config/routes.php, it's displayed at http://example.com/
*
* So any other public methods not prefixed with an underscore will
* map to /index.php/welcome/<method_name>
* @see https://codeigniter.com/user_guide/general/urls.html
*/
/*public function index()
{
$this->load->view('forms');
}*/
public function userloginform(){
	if ($this->input->post()) {
//echo "string";die;
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$tary= array('username'=>$username,'password'=>$password);
//var_dump($tary);
		$this->form_validation->set_rules('username','Usename','required|min_length[5]|max_length[35]|valid_email|trim');
		$this->form_validation->set_rules('password','Password','required|min_length[3]|max_length[15]|trim');
		if ($this->form_validation->run()==false) {
			$data['error']="sorry,something wrong";
			$this->load->view('tatologin',$data);
		}
		else{
			$this->load->model('tatomodel');
			if (!$this->tatomodel->checklogindetails($tary)){
				$data['error']="incorrect password or username";
				$this->load->view('tatologin',$data);
			}
			else{
				$tary['name']=$username;
				$tary['password']=$password;
				$this->registersession($tary);
				$this->load->view('tatodisc');
			}
		}
	}
	else{
		
		$this->load->view('tatologin');
	}
}
public function registersession($tary){
	// $username=$tary['username'];
	$this->session->set_userdata($tary);
	// var_dump($_SESSION['username']);die;
	//$this->session->set_userdata($password);
}


public function usercreateform(){

	if ($this->input->post()) {
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$dob=$this->input->post('date');
		$nation=$this->input->post('nationality');
		$password=$this->input->post('password');
		$tary1= array('name'=>$name,'email'=>$email,'dob'=>$dob,'nationality'=>$nation,'password'=>$password);

		$this->form_validation->set_rules('name','Name','required|min_length[3]|max_length[15]|alpha');
		$this->form_validation->set_rules('email','Email','required|min_length[3]|max_length[30]|valid_email|trim');
		$this->form_validation->set_rules('date','Date of birth','required|min_length[5]|max_length[15]|trim');
		$this->form_validation->set_rules('nationality','Nationality','required|min_length[3]|max_length[20]|trim');
		$this->form_validation->set_rules('password','Password','required|min_length[3]|max_length[15]|trim');
		if ($this->form_validation->run() == FALSE){
			$this->load->view('tatonewacc');
		}else{
			$this->load->model('tatomodel');
			if(!$this->tatomodel->saveUseraccountDetails($tary1)){
				$data['error'] = "Sorry, something went wrong!";
				$this->load->view('tatonewacc', $data);
			} else {
				$data['message'] = "your account is created successfully";
				$this->load->view('tatologin', $data);
			}
		}
	} 
	else
		{$this->load->view('tatonewacc');
}
}
public function userlogout(){
	$this->session->unset_userdata('username');
	$this->load->view('tatologin');
}
public function userchangepassword(){
	if ($this->input->post()) {
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$ary=array('username'=>$username,'password'=>$password);
		$this->load->model('tatomodel');
		if(!$this->tatomodel->changepassworddetails($ary))
		{
			$data['error']="invalid username";
			$this->load->view('tatochangepass',$data);
		}
		else{
			
			$data['message'] = "your password changed";
			$this->load->view('tatologin',$data);
		}
	}

	else{
		$this->load->view('tatochangepass');
	}
}
public function welcome(){
	$this->load->view('facebook');
}

}