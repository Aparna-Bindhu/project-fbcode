<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class formvalidcontroller extends CI_Controller {

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
   public function validation()
    {if ($this->input->post()) {
    	//echo "string";
    	$name=$this->input->post('name');
    	$email=$this->input->post('email');
    	$password=$this->input->post('password');
    	$aryy = array('name'=>$name, 'email'=>$email, 'password'=>$password);
    	//var_dump($ary);
    $this->form_validation->set_rules('name','Name','required|min_length[3]|max_length[15]|alpha|trim');
    $this->form_validation->set_rules('email','Email','required|min_length[3]|max_length[15]|valid_email|trim');
    $this->form_validation->set_rules('password','Password','required|min_length[3]|max_length[15]|trim');
    if ($this->form_validation->run() == FALSE){
$this->load->view('formvalid');
}else{
$this->load->model('usermodel1');
if(!$this->usermodel1->saveUserRegistrationDetails($aryy)){
$data['error'] = "Sorry, something went wrong!";
$this->load->view('formvalid', $data);
} else {
$data['message'] = "Thank you for signing up.";
$this->load->view('formvalid', $data);
}
}
} else {
$this->load->view('formvalid');
}
}
public function userloginvalidation()
    {if ($this->input->post()) {
    	//echo "string";
    	//$name=$this->input->post('name');
    	$email=$this->input->post('email');
    	$password=$this->input->post('password');
    	$aray = array('email'=>$email, 'password'=>$password);
    	//var_dump($ary);
    //$this->form_validation->set_rules('name','Name','required|min_length[3]|max_length[15]|alpha|trim');
    $this->form_validation->set_rules('email','Email','required|min_length[3]|max_length[50]|valid_email|trim');
    $this->form_validation->set_rules('password','Password','required|min_length[3]|max_length[15]|trim');
    if ($this->form_validation->run() == FALSE){
        $data['error']="something errors"; 
        $this->load->view('loginuser',$data);
       }
       else{
     $this->load->model('usermodel1');
     if(!$this->usermodel1->saveUserloginDetails($aray)){
      $data['error'] = "Sorry to login";
        $this->load->view('loginuser', $data);
      } else {
      	$this->registersession($aray);
     $data['message'] = "Thank you for signing up.";
    $this->load->view('new2', $data);
  }
 }
} else {
$this->load->view('loginuser');
}
}
public function registersession($aray){
	//var_dump($aray['email']);die;
	$email=$aray['email'];
	$this->session->set_userdata($email);
	//$password = $aray[1]->password;
//$this->session->set_userdata($password);
}
}
//} 
//public function logoutuser(){

//} 
