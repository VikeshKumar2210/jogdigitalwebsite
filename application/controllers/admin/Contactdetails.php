<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactdetails extends CI_Controller {

	public function __construct(){	
		parent::__construct();
		$this->load->model('Admin_model');

	}
	public function index()
	{
		$data['contactdata']=$this->db->query("SELECT * FROM contact_details")->result();
		// print_r($data['contactdata']);
		// die();
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/edit_contactdetails',$data);
		$this->load->view('admin/template/footer');
	}
	public function view_contact_details()
	{
		$data['contactdata']=$this->db->query("SELECT * FROM contact_details")->result();
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/viewcontactdetails',$data);
		$this->load->view('admin/template/footer');
	}
	// public function editcontacts()
 //   	{
	// 	$contact_id=$this->input->post('contact_id');
	// 	$data['contactdata']=$this->db->query("SELECT * FROM contact_details where contact_id='$contact_id'")->result();
	// 	// print_r($data['contactdata']);
	// 	// die();
	// 	$this->load->view('admin/template/sidebar');
	// 	$this->load->view('admin/edit_contactdetails',$data);
	// 	$this->load->view('admin/template/footer');
	// }
	// public function insertdata()
	// {
	// 	$data = array();
	//         // If file upload form submitted
	// 	$address=$_POST['address'];
	// 	$phone=$_POST['phone'];
	// 	$email=$_POST['email'];
	// 	$facebook=$_POST['facebook'];
	// 	$twitter=$_POST['twitter'];
	// 	$youtube=$_POST['youtube'];
	// 	$instagram=$_POST['instagram'];
	// 	$linkedin=$_POST['linkedin'];
	// 	date_default_timezone_set("Asia/Kolkata");
	// 	$timenow = date('Y-m-d H:i:s');
 //            // Insert files data into the database
 //        $data = array(
 //        	'contact_address'=>$address,
 //        	'contact_phone'=>$phone,
 //        	'contact_email'=>$email,
 //        	'facebook'=>$facebook,
 //        	'twitter'=>$twitter,
 //        	'youtube'=>$youtube,
 //        	'instagram'=>$instagram,
 //        	'linkedin'=>$linkedin,
 //        );
 //        $result=$this->Admin_model->insert_data($tablename='contact_details',$data);
	// 	if($result){
	// 		die(json_encode(array('status' =>'1' ,'msg'=>'Contact details Saved Successfully')));
	// 	}
	// 	else{
	// 		die(json_encode(array('status' =>'0' ,'msg'=>'Error')));
	// 	}
        
	// }

	public function updatedata()
   	{

		$data = array();
	        // If file upload form submitted
		$contact_id=$_POST['contact_id'];
		$address=$_POST['address'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$facebook=$_POST['facebook'];
		$twitter=$_POST['twitter'];
		$youtube=$_POST['youtube'];
		$instagram=$_POST['instagram'];
		$linkedin=$_POST['linkedin'];
		date_default_timezone_set("Asia/Kolkata");
		$timenow = date('Y-m-d H:i:s');
            // Insert files data into the database
        $data = array(
        	'contact_address'=>$address,
        	'contact_phone'=>$phone,
        	'contact_email'=>$email,
        	'facebook'=>$facebook,
        	'twitter'=>$twitter,
        	'youtube'=>$youtube,
        	'instagram'=>$instagram,
        	'linkedin'=>$linkedin
        );
        $condition=array(
            'contact_id'=>$contact_id);
     	
        if($this->Admin_model->update_data($tablename='contact_details',$condition,$data))
        {
            die(json_encode(array('status' =>'1' ,'msg'=>'Contact details Updated Successfully')));
        }
        else{
            die(json_encode(array('status' =>'0' ,'msg'=>'Error while updating user details')));
        }
        
	}
	
}
