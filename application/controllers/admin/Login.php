<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){	
		parent::__construct();
		$this->load->model('Login_model');

	}
	public function index()
	{

		$this->load->view('admin/login');
	}


	public function checklogin()
	{
		$email=$_POST['email'];
		$password=$_POST['password'];
		$data = array('admin_email'=>$email);
   		$result=$this->Login_model->check_user($data);
   		if($result)
   		{
   			$user_data=$this->Login_model->read_user_information($data);
   			$db_password=$user_data[0]->admin_password;
   			if($password==$db_password)
   			{
   				$this->session->set_userdata('logged_in', $user_data);
   				die(json_encode(array('status'=>'1','msg'=>'log in Successfull')));
   			}
   			else
   			{
   				die(json_encode(array('status'=>'0','msg'=>'Wrong crdentials')));
   			}
   		}
   		else
   		{
   			die(json_encode(array('status'=>'0','msg'=>'User doesnot exist')));
   		}
   	}
   	public function logout()
	{
		$sess_array = array();
		$this->session->unset_userdata('logged_in', $sess_array);
		$this->load->view('admin/login');
	}
}
