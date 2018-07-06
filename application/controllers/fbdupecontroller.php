<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class fbdupecontroller extends CI_Controller {

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
//    public function welcome(){
// 	$this->load->view('facebookdupe/facebook');
// }
   public function fbloginpage(){
   	if($this->input->post()) {
   		// echo "string";die;
   		$email=$this->input->post('email');
   	    $password=$this->input->post('password');
   	    $loary= array('email'=>$email,'password'=>$password);
   	    // var_dump($loary);die;
   	    $this->form_validation->set_rules('email','Email','required|min_length[5]|max_length[50]|valid_email|trim');
		$this->form_validation->set_rules('password','Password','required|min_length[3]|max_length[25]|trim');
		if ($this->form_validation->run()==false) {
			$data['error']="sorry,something wrong";
			$this->load->view('facebookdupe/fblogin',$data);
		}
		else{
			$this->load->model('fbmodel');
			if (!$this->fbmodel->checklogindetails($tary)){
				$data['error']="incorrect password or username";
				$this->load->view('facebookdupe/fblogin',$data);
			}
			// else{
			// 	$loary['email']=$username;
			// 	$loary['password']=$password;
			// 	$this->registersession($loary);
			// 	// $this->load->view('tatodisc');
			// }
		}
   	}else{

	    $this->load->view('facebookdupe/fblogin');
   	}
}
public function registersession($loary){
  $this->session->set_userdata($loary);
}

	public function facebkacc(){

	if ($this->input->post()) {
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$fbary= array('name'=>$name,'email'=>$email,'password'=>$password);

		$this->form_validation->set_rules('name','Name','required|min_length[3]|max_length[50]|alpha');
		$this->form_validation->set_rules('email','Email','required|min_length[3]|max_length[50]|valid_email|trim');
		$this->form_validation->set_rules('birthday','Birthday','required');
		$this->form_validation->set_rules('birthmonth','Birthmonth','required');
		$this->form_validation->set_rules('birthyear','Birthyear','required');
		$this->form_validation->set_rules('password','Password','required|min_length[5]|max_length[25]|trim');
		if ($this->form_validation->run() == FALSE){
			$this->load->view('fblogin');
		}else{
			$this->load->model('fbmodel');
			if(!$this->tatomodel->saveUseraccountDetails($fbary)){
				$data['error'] = "Sorry, something went wrong!";
				$this->load->view('fblogin', $data);
			} else {
				$data['message'] = "your account is created successfully";
				$this->load->view('fblogin', $data);
			}
		}
	} 
	else
		{$this->load->view('fblogin');
}
}

//  public function fbchgpasspage(){
//      $this->load->view('facebookdupe/fbchangepass');   
// }
}