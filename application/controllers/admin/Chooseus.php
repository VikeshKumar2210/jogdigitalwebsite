<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chooseus extends CI_Controller {

	public function __construct(){	
		parent::__construct();
		$this->load->model('Admin_model');

	}
	public function index()
	{
		$data['chooseusdata']=$this->db->query("SELECT * FROM chooseus")->result();
		// print_r($data['contactdata']);
		// die();
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/edit_chooseus',$data);
		$this->load->view('admin/template/footer');
	}
	public function view_chooseus()
	{
		$data['chooseusdata']=$this->db->query("SELECT * FROM chooseus")->result();
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/viewchooseus',$data);
		$this->load->view('admin/template/footer');
	}

	public function updatedata()
   	{

		$data = array();
	        // If file upload form submitted
		$choose_id=$_POST['choose_id'];
		$happy_client=$_POST['happy_client'];
		$project_completed=$_POST['project_completed'];
        $data = array(
        	'happy_client'=>$happy_client,
        	'project_completed'=>$project_completed
        );
        $condition=array(
            'choose_id'=>$choose_id);
     	
        if($this->Admin_model->update_data($tablename='chooseus',$condition,$data))
        {
            die(json_encode(array('status' =>'1' ,'msg'=>'Details Updated Successfully')));
        }
        else{
            die(json_encode(array('status' =>'0' ,'msg'=>'Error while updating user details')));
        }
        
	}
	
}
