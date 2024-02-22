<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends CI_Controller {

	public function __construct(){	
		parent::__construct();
		$this->load->model('Admin_model');

	}
	public function index()
	{
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/add_media');
		$this->load->view('admin/template/footer');
	}
	public function view_media()
	{
		$data['mediadata']=$this->db->query("SELECT * FROM media")->result();
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/viewmedia',$data);
		$this->load->view('admin/template/footer');
	}
	public function insertdata()
	{
		$data = array();
	        // If file upload form submitted
      	$pics='';
		$release_title=$_POST['press_title'];
		$description=$_POST['description'];
        $release_date=$_POST['releasedate'];
        if(!empty($_FILES['images']['name']))
        {	
        $ext = pathinfo($_FILES['images']['name'], PATHINFO_EXTENSION);
        $_FILES['file']['name']     = "Media-image-".date("Y-m-d-H-i-s").".".$ext;
        $_FILES['file']['type']     = $_FILES['images']['type'];
        $_FILES['file']['tmp_name'] = $_FILES['images']['tmp_name'];
        $_FILES['file']['error']     = $_FILES['images']['error'];
        $_FILES['file']['size']     = $_FILES['images']['size'];
        
        // File upload configuration
        $uploadPath = 'assets/admin/uploads/Media/';
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
        }
        $data = array(
        	'release_title'=>$release_title,'media_pics'=>$pics,
        	'description'=>$description,'release_date'=>$release_date
        );

        $result=$this->Admin_model->insert_data($tablename='media',$data);
		if($result){
			die(json_encode(array('status' =>'1' ,'msg'=>'Media Added Successfully')));
		}
		else{
			die(json_encode(array('status' =>'0' ,'msg'=>'Error')));
		}

	}
	public function resizeImage($filename)
	{
	      $source_path = $_SERVER['DOCUMENT_ROOT'] . '/visiontechnosoft/assets/admin/uploads/' . $filename;//
	      $target_path = $_SERVER['DOCUMENT_ROOT'] . '/visiontechnosoft/assets/admin/uploads';
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
   	public function deletemedia()
   	{
		$image_path='assets/admin/uploads/Media/';
		$image_name=$_POST['image_name'];
		$data=array("media_id"=>$this->input->post('media_id'));
		if($this->Admin_model->delete_data('media',$data))
		{
			$filename = $image_path . $image_name; 
	        if (file_exists($filename))
	        {
	            unlink($filename);
	        }
			die(json_encode(array("status"=>1,"msg"=>"Media Deleted Successfully.")));
		}
		else
		{
			die(json_encode(array("status"=>0,"msg"=>"Failed To Delete.")));
		}
	}
	 public function editmedia()
   	{
		$media_id=$this->input->post('media_id');
		$data['mediadata']=$this->db->query("SELECT * FROM media where media_id='$media_id'")->result_array();
		// print_r($data['contactdata']);
		// die();
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/edit_media',$data);
		$this->load->view('admin/template/footer');
	}
	public function updatedata()
	{
		$data = array();
	        // If file upload form submitted
      	$media_id=$_POST['media_id'];
		$release_title=$_POST['press_title'];
		$description=$_POST['description'];
        $release_date=$_POST['releasedate'];
       
         if(!empty($_FILES['images']['name']))
        {
        $ext = pathinfo($_FILES['images']['name'], PATHINFO_EXTENSION);
        $_FILES['file']['name']     = "Media-image-".date("Y-m-d-H-i-s").".".$ext;
        $_FILES['file']['type']     = $_FILES['images']['type'];
        $_FILES['file']['tmp_name'] = $_FILES['images']['tmp_name'];
        $_FILES['file']['error']     = $_FILES['images']['error'];
        $_FILES['file']['size']     = $_FILES['images']['size'];
        
        // File upload configuration
        $uploadPath = 'assets/admin/uploads/Media/';
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
        }
        else
        {
        	$pics=$_POST['old_image'];
        }
        $data = array(
        	'release_title'=>$release_title,'media_pics'=>$pics,
        	'description'=>$description,'release_date'=>$release_date
        );
         $condition=array(
            'media_id'=>$media_id);
     	
        if($this->Admin_model->update_data($tablename='media',$condition,$data))
        {
            die(json_encode(array('status' =>'1' ,'msg'=>'Media Updated Successfully')));
        }
        else{
            die(json_encode(array('status' =>'0' ,'msg'=>'Error while updating user details')));
        }

	}
}
