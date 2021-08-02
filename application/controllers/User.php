<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/*public function __construct()
	{
		parent::__construct();
	}*/
	public function index(){

		echo "def ()";
		$this->load->view('user',$data);
	}
	public function login(){
		$this->load->view('login',$data);
	}
 //public function login
	public function signup(){
		$this->load->view('user/signup');
	}
	public function login_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');

		if($this->form_validation->run())
		{

			//true
			$username=$this->input->post('username');
			$password=$this->input->post('password');

			//model function
			$this->load->model('User_model');
			if($this->User_model->can_login($username,$password))
			{
				$session_data=array(  'username'=> $username);
				$this->session->set_userdata($session_data);
				redirect(base_url().'User/main');
			}
			else
			{
				$this->session->set_flashdata('error','Invalid username or password');
				redirect(base_url(),'User/login');
			}
		}
		else
		{
			$this->login(); 

		}
	}
	public function main(){
		if($this->session->userdata('username') !='')
		{
			echo '<h2>Welcome to the world of online dating  '.$this->session->userdata('username').'</h2>';
			echo '<label><a href="'.base_url().'User/logout">Logout</a></label>';
		}
	}  
	public function logout() 
	{
		$this->session->unset_userdata('username');
		redirect(base_url(). 'User/login');
	}   
	
}
