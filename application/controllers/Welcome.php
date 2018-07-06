<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
   public function tan()
    {
    	$this->load->view('new2');
    }

    public function register(){
    	// echo "string";die;
    	if($this->input->post()){
    		$fullname = $this->input->post('fullname');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$credentialls = array('fullname'=>$fullname, 'email'=>$email, 'password'=>$password);
			$this->load->model('UserModel');
			$this->UserModel->saveUserRegistrationDetails($credentialls);
	    	$this->load->view('reister');
    	}else{
	    	$this->load->view('reister');
    	}
    }

}
