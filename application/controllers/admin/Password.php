<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Password extends CI_Controller {

	public function __construct(){	
		parent::__construct();
		$this->load->model('Admin_model');

	}
	public function index()
	{
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/add_newpassword');
		$this->load->view('admin/template/footer');
	}

	public function updatedata()
	{
		$data = array();
	        // If file upload form submitted
      	$admin_password=$_POST['password'];
      	$confirm_password=$_POST['confirmpassword'];
      	if($admin_password==$confirm_password)
      	{
	        $data = array(
	        	'admin_password'=>$admin_password
	        );
	        
	        if($this->Admin_model->update_password($tablename='admin',$data))
	        {
	            die(json_encode(array('status' =>'1' ,'msg'=>'Password Updated Successfully')));
	        }
	        else{
	            die(json_encode(array('status' =>'0' ,'msg'=>'Error while updating user details')));
	        }
	     }
	     else
	     {
	     	 die(json_encode(array('status' =>'0' ,'msg'=>'Confirm Password Mismatch')));
	     }

	}
}
