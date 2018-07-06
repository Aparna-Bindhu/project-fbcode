<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class formcontroller extends CI_Controller {

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
   public function index()
    {if ($this->input->post()) {
    	//echo "string";
    	$name=$this->input->post('name');
    	$email=$this->input->post('email');
    	$password=$this->input->post('password');
    	$ary = array('name'=>$name, 'email'=>$email, 'password'=>$password);
    	//var_dump($ary);
    	$this->load->model('UserModel');
			if($this->UserModel->saveUserRegistrationDetails($ary))
			{
                $data['message'] = "your datas are submitted successfully";
				$this->load->view('form',$data);
			}
	    	else{
	    		$data['error']="sorry,something went wrong!";
	    		$this->load->view('form',$data);
	    	    }
	    	}
    
    else{
    	
    	$this->load->view('form');
       }
    }
   public function changepassword(){
  //$this->load->view('login');
   
  if($this->input->post()){
  // 	echo "string";die;
  	$userid=$this->input->post('userid');
  	$password=$this->input->post('password');
  	$log=array('userid'=>$userid,'password'=>$password);
  	$this->load->model('UserModel');
  	if($this->UserModel->loginpagedetails($log))
			{
                $data['message'] = "welcome";
				$this->load->view('formlogin',$data);
			}
	    	else{
	    		$data['error']="invalid userid or password";
	    		$this->load->view('formlogin',$data);
	    	    }
   }
   else{
   	$this->load->view('formlogin');
   }
   }
   public function deletedetails(){
   	if($this->input->post()){
  // 	echo "string";die;
  	$userid=$this->input->post('userid');
  	
  	$del=array('userid'=>$userid);
  	$this->load->model('UserModel');
  	if($this->UserModel->deletedetailsusers($del))
			{
                $data['message'] = "welcome";
				$this->load->view('deleteform',$data);
			}
	    	else{
	    		$data['error']="invalid userid or password";
	    		$this->load->view('deleteform',$data);
	    	    }
   }
   else{
   	$this->load->view('deleteform');
   }
   }
   public function selectdetails(){
   	if($this->input->post()){
  // 	echo "string";die;
  	$userid=$this->input->post('userid');
  	
  	$sel=array('userid'=>$userid);
  	$this->load->model('UserModel');
  	if(!$this->UserModel->selectdetailsusers($sel))
			{
                $data['error'] = "sorry,something went wrong";
				$this->load->view('selection',$data);
			}
	    	else{
	    		$data['results']=($this->UserModel->selectdetailsusers($sel));
	    		$this->load->view('selection',$data);
	    	    }
   }
   else{
   	$this->load->view('selection');
   }
   }
   
}