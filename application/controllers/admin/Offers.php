<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offers extends CI_Controller {

	public function __construct(){	
		parent::__construct();
		$this->load->model('Admin_model');

	}
	public function index()
	{
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/add_offers');
		$this->load->view('admin/template/footer');
	}
	public function view_offers()
	{
		$data['offerdata']=$this->db->query("SELECT * FROM offers")->result();
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/viewoffers',$data);
		$this->load->view('admin/template/footer');
	}
	public function insertdata()
	{
		$data = array();
	        // If file upload form submitted
      	$pics='';
		$offer_name=$_POST['offer_name'];
        $offer_description=$_POST['offer_description'];
        if(!empty($_FILES['images']['name']))
        {	
        $ext = pathinfo($_FILES['images']['name'], PATHINFO_EXTENSION);
        $_FILES['file']['name']     = "Offer-image-".date("Y-m-d-H-i-s").".".$ext;
        $_FILES['file']['type']     = $_FILES['images']['type'];
        $_FILES['file']['tmp_name'] = $_FILES['images']['tmp_name'];
        $_FILES['file']['error']     = $_FILES['images']['error'];
        $_FILES['file']['size']     = $_FILES['images']['size'];
        
        // File upload configuration
        $uploadPath = 'assets/admin/uploads/Offer/';
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
        	'offer_name'=>$offer_name,'offer_description'=>$offer_description,'offer_image'=>$pics
        );

        $result=$this->Admin_model->insert_data($tablename='offers',$data);
		if($result){
			die(json_encode(array('status' =>'1' ,'msg'=>'Offer Added Successfully')));
		}
		else{
			die(json_encode(array('status' =>'0' ,'msg'=>'Error')));
		}

	}
	public function resizeImage($filename)
	{
	      $source_path = $_SERVER['DOCUMENT_ROOT'] . '/visiontechnosoft/assets/admin/uploads/Offer/' . $filename;//
	      $target_path = $_SERVER['DOCUMENT_ROOT'] . '/visiontechnosoft/assets/admin/uploads/Offer/';
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
   	public function deleteoffer()
   	{
		$image_path='assets/admin/uploads/Offer/';
		$image_name=$_POST['image_name'];
		$data=array("offer_id"=>$this->input->post('offer_id'));
		if($this->Admin_model->delete_data('offers',$data))
		{
			$filename = $image_path . $image_name; 
	        if (file_exists($filename))
	        {
	            unlink($filename);
	        }
			die(json_encode(array("status"=>1,"msg"=>"Offer Deleted Successfully.")));
		}
		else
		{
			die(json_encode(array("status"=>0,"msg"=>"Failed To Delete.")));
		}
	}
	 public function editoffer()
   	{
		$offer_id=$this->input->post('offer_id');
		$data['offerdata']=$this->db->query("SELECT * FROM offers where offer_id='$offer_id'")->result_array();
		// print_r($data['contactdata']);
		// die();
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/edit_offers',$data);
		$this->load->view('admin/template/footer');
	}
	public function updatedata()
	{
		$data = array();
	        // If file upload form submitted
      	$offer_id=$_POST['offer_id'];
		$offer_name=$_POST['offer_name'];
        $offer_description=$_POST['offer_description'];
         if(!empty($_FILES['images']['name']))
        {
        $ext = pathinfo($_FILES['images']['name'], PATHINFO_EXTENSION);
        $_FILES['file']['name']     = "Offer-image-".date("Y-m-d-H-i-s").".".$ext;
        $_FILES['file']['type']     = $_FILES['images']['type'];
        $_FILES['file']['tmp_name'] = $_FILES['images']['tmp_name'];
        $_FILES['file']['error']     = $_FILES['images']['error'];
        $_FILES['file']['size']     = $_FILES['images']['size'];
        
        // File upload configuration
        $uploadPath = 'assets/admin/uploads/Offer/';
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
        	'offer_name'=>$offer_name,'offer_description'=>$offer_description,'offer_image'=>$pics
        );
         $condition=array(
            'offer_id'=>$offer_id);
     	
        if($this->Admin_model->update_data($tablename='offers',$condition,$data))
        {
            die(json_encode(array('status' =>'1' ,'msg'=>'Offer Updated Successfully')));
        }
        else{
            die(json_encode(array('status' =>'0' ,'msg'=>'Error while updating user details')));
        }

	}
}
