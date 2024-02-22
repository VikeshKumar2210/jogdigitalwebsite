<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct(){	
		parent::__construct();
		$this->load->model('Admin_model');

	}
	public function index()
	{
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/add_about');
		$this->load->view('admin/template/footer');
	}
	public function view_aboutus_list()
	{
		$data['aboutdata']=$this->db->query("SELECT * FROM about_us")->result();
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/viewaboutuslist',$data);
		$this->load->view('admin/template/footer');
	}
	public function insertdata()
	{
		$data = array();
	        // If file upload form submitted
        if(!empty($_FILES['images']['name']))
        {		
    		$title=$_POST['title'];
    		$content=$_POST['content'];
    		date_default_timezone_set("Asia/Kolkata");
    		$timenow = date('Y-m-d H:i:s');
            $ext = pathinfo($_FILES['images']['name'], PATHINFO_EXTENSION);
            $_FILES['file']['name']     = "About-image-".date("Y-m-d-H-i-s").".".$ext;
            $_FILES['file']['type']     = $_FILES['images']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['images']['tmp_name'];
            $_FILES['file']['error']     = $_FILES['images']['error'];
            $_FILES['file']['size']     = $_FILES['images']['size'];
            
            // File upload configuration
            $uploadPath = 'assets/admin/uploads/About/';
            $config['upload_path'] = $uploadPath;
            $config['max_size'] = '*';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            
            // Load and initialize upload library
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            
            // Upload file to server
            if($this->upload->do_upload('file')){
                // Uploaded file data
                $fileData = $this->upload->data();
                //$this->resizeImage($_FILES['file']['name'] );
                $uploadData['file_name'] = $fileData['file_name'];
                $uploadData['uploaded_on'] = date("Y-m-d H:i:s");
            }
            $this->resizeImage($_FILES['file']['name'] );
            $pics=$_FILES['file']['name'];
            if(!empty($uploadData)){
                // Insert files data into the database
                $data = array(
                	'about_title'=>$title,
                	'about_image'=>$pics,
                	'about_content'=>$content,
                	'about_created_on'=>$timenow
                );
                $result=$this->Admin_model->insert_data($tablename='about_us',$data);
				if($result){
					die(json_encode(array('status' =>'1' ,'msg'=>'About US Content Inserted Successfully')));
				}
				else{
					die(json_encode(array('status' =>'0' ,'msg'=>'Error')));
				}

            }
        }
        else
        {
    		$title=$_POST['title'];
    		$content=$_POST['content'];
    		date_default_timezone_set("Asia/Kolkata");
    		$timenow = date('Y-m-d H:i:s');
	    	$data = array(
		        	'about_title'=>$title,
		        	'about_content'=>$content,
		        	'about_created_on'=>$timenow
		        );
	        $result=$this->Admin_model->insert_data($tablename='about_us',$data);
			if($result){
				die(json_encode(array('status' =>'1' ,'msg'=>'About US Content Inserted Successfully')));
			}
			else{
				die(json_encode(array('status' =>'0' ,'msg'=>'Error')));
			}
        }
	}
		public function resizeImage($filename)
	{
	      $source_path = $_SERVER['DOCUMENT_ROOT'] . '/visiontechnosoft/assets/admin/uploads/About/' . $filename;//
	      $target_path = $_SERVER['DOCUMENT_ROOT'] . '/visiontechnosoft/assets/admin/uploads/About/';
	      $config_manip = array(
	          'image_library' => 'gd2',
	          'source_image' => $source_path,
	          'new_image' => $target_path,
	          'maintain_ratio' => TRUE,
	          'width' => 500,
	      );
	   
	      $this->load->library('image_lib');
		  $this->image_lib->initialize($config_manip);
	      if (!$this->image_lib->resize()) {
	          $this->image_lib->display_errors();
	      }
	   
	      $this->image_lib->clear();
   	}
   	public function deleteabout()
   	{
		$image_path='assets/admin/uploads/About/';
		$image_name=$_POST['image_name'];
		$data=array("about_id"=>$this->input->post('about_id'));
		if($this->Admin_model->delete_data('about_us',$data))
		{
			$filename = $image_path . $image_name; 
	        if (file_exists($filename))
	        {
	            unlink($filename);
	        }
			die(json_encode(array("status"=>1,"msg"=>"About data Deleted Successfully.")));
		}
		else
		{
			die(json_encode(array("status"=>0,"msg"=>"Failed To Delete.")));
		}
	}
	public function editaboutus()
   	{
		$about_id=$this->input->post('about_id');
		$data['aboutdata']=$this->db->query("SELECT * FROM about_us where about_id='$about_id'")->result();
		// print_r($data['contactdata']);
		// die();
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/edit_aboutus',$data);
		$this->load->view('admin/template/footer');
	}
	public function updatedata()
	{
		$data = array();
	        // If file upload form submitted
     	if(!empty($_FILES['images']['name']))
        {		
        	$about_id=$_POST['about_id'];
    		$title=$_POST['title'];
    		$content=$_POST['content'];
    		date_default_timezone_set("Asia/Kolkata");
    		$timenow = date('Y-m-d H:i:s');
            $ext = pathinfo($_FILES['images']['name'], PATHINFO_EXTENSION);
            $_FILES['file']['name']     = "About-image-".date("Y-m-d-H-i-s").".".$ext;
            $_FILES['file']['type']     = $_FILES['images']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['images']['tmp_name'];
            $_FILES['file']['error']     = $_FILES['images']['error'];
            $_FILES['file']['size']     = $_FILES['images']['size'];
            
            // File upload configuration
            $uploadPath = 'assets/admin/uploads/About/';
            $config['upload_path'] = $uploadPath;
            $config['max_size'] = '*';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            
            // Load and initialize upload library
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            
            // Upload file to server
            if($this->upload->do_upload('file')){
                // Uploaded file data
                $fileData = $this->upload->data();
                //$this->resizeImage($_FILES['file']['name'] );
                $uploadData['file_name'] = $fileData['file_name'];
                $uploadData['uploaded_on'] = date("Y-m-d H:i:s");
            }
            $this->resizeImage($_FILES['file']['name'] );
            $pics=$_FILES['file']['name'];
            if(!empty($uploadData))
            {
		        $data = array(
		        	'about_title'=>$title,
		        	'about_image'=>$pics,
		        	'about_content'=>$content,
		        	'about_created_on'=>$timenow
		        );
		         $condition=array(
		            'about_id'=>$about_id);
		     	
		        if($this->Admin_model->update_data($tablename='about_us',$condition,$data))
		        {
		            die(json_encode(array('status' =>'1' ,'msg'=>'About Us Updated Successfully')));
		        }
		        else{
		            die(json_encode(array('status' =>'0' ,'msg'=>'Error while updating user details')));
		        }
	    	
	    	}
		}
	    else
	    {
	    	// print_r($_POST);
	    	// die();
	    	$pics=$_POST['old_images'];
    		$title=$_POST['title'];
			$about_id=$_POST['about_id'];
    		$content=$_POST['content'];
    		date_default_timezone_set("Asia/Kolkata");
    		$timenow = date('Y-m-d H:i:s');
	    	$data = array(
		        	'about_title'=>$title,
		        	'about_content'=>$content,
		        	'about_image'=>$pics,
		        	'about_created_on'=>$timenow
		        );
	         $condition=array(
	            'about_id'=>$about_id);
	     	
	        if($this->Admin_model->update_data($tablename='about_us',$condition,$data))
	        {
	            die(json_encode(array('status' =>'1' ,'msg'=>'About Us Updated Successfully')));
	        }
	        else{
	            die(json_encode(array('status' =>'0' ,'msg'=>'Error while updating user details')));
	        }
	    }
	}

}
