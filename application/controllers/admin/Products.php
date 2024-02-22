<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct(){	
		parent::__construct();
		$this->load->model('Admin_model');

	}
	public function index()
	{
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/add_products');
		$this->load->view('admin/template/footer');
	}
	public function view_products()
	{
		$data['productdata']=$this->db->query("SELECT * FROM products")->result();
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/viewproducts',$data);
		$this->load->view('admin/template/footer');
	}
		public function insertdata()
	{
		$data = array();
	        // If file upload form submitted
      	
		$products=$_POST['products'];
        $brief=$_POST['brief'];
		$description=$_POST['description'];
            //start icon code
        $icon='';
        if(!empty($_FILES['icon']['name']))
        {   
            $ext = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
            $_FILES['file']['name']     = "Product-icon-".date("Y-m-d-H-i-s").".".$ext;
            $_FILES['file']['type']     = $_FILES['icon']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['icon']['tmp_name'];
            $_FILES['file']['error']     = $_FILES['icon']['error'];
            $_FILES['file']['size']     = $_FILES['icon']['size'];
            
            // File upload configuration
            $uploadPath = 'assets/admin/uploads/Product/Icons/';
            $config['upload_path'] = $uploadPath;
            $config['max_size'] = '*';
            $config['allowed_types'] = 'jpg|jpeg|png';
            
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
            $icon=$_FILES['file']['name'];
        }
        //end icon code
        $pics='';
        if(!empty($_FILES['images']['name']))
        {	
        $ext = pathinfo($_FILES['images']['name'], PATHINFO_EXTENSION);
        $_FILES['file']['name']     = "Product-image-".date("Y-m-d-H-i-s").".".$ext;
        $_FILES['file']['type']     = $_FILES['images']['type'];
        $_FILES['file']['tmp_name'] = $_FILES['images']['tmp_name'];
        $_FILES['file']['error']     = $_FILES['images']['error'];
        $_FILES['file']['size']     = $_FILES['images']['size'];
        
        // File upload configuration
        $uploadPath = 'assets/admin/uploads/Product/';
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
        	'product_image'=>$pics,'icon'=>$icon,
        	'products'=>$products,'brief'=>$brief,
        	'description'=>$description
        );

        $result=$this->Admin_model->insert_data($tablename='products',$data);
		if($result){
			die(json_encode(array('status' =>'1' ,'msg'=>'products Added Successfully')));
		}
		else{
			die(json_encode(array('status' =>'0' ,'msg'=>'Error')));
		}

	}
	public function resizeImage($filename)
	{
	      $source_path = $_SERVER['DOCUMENT_ROOT'] . '/visiontechnosoft/assets/admin/uploads/Product' . $filename;//
	      $target_path = $_SERVER['DOCUMENT_ROOT'] . '/visiontechnosoft/assets/admin/uploads/Product';
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
   	public function deleteproducts()
   	{
		$image_path='assets/admin/uploads/Product/';
		$image_name=$_POST['image_name'];
		$data=array("product_id"=>$this->input->post('product_id'));
		if($this->Admin_model->delete_data('products',$data))
		{
			$filename = $image_path . $image_name; 
	        if (file_exists($filename))
	        {
	            unlink($filename);
	        }
			die(json_encode(array("status"=>1,"msg"=>"products Deleted Successfully.")));
		}
		else
		{
			die(json_encode(array("status"=>0,"msg"=>"Failed To Delete.")));
		}
	}
	 public function editproducts()
   	{
		$product_id=$this->input->post('product_id');
		$data['productsdata']=$this->db->query("SELECT * FROM products where product_id='$product_id'")->result();
		// print_r($data['contactdata']);
		// die();
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/edit_products',$data);
		$this->load->view('admin/template/footer');
	}
	public function updatedata()
	{
		$data = array();
	        // If file upload form submitted

		$product_id=$_POST['product_id'];
		$products=$_POST['products'];
        $brief=$_POST['brief'];
		$description=$_POST['description'];
       //icon code start

        if(!empty($_FILES['icon']['name']))
        {
        $ext = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
        $_FILES['file']['name']     = "Product-icon-".date("Y-m-d-H-i-s").".".$ext;
        $_FILES['file']['type']     = $_FILES['icon']['type'];
        $_FILES['file']['tmp_name'] = $_FILES['icon']['tmp_name'];
        $_FILES['file']['error']     = $_FILES['icon']['error'];
        $_FILES['file']['size']     = $_FILES['icon']['size'];
        
        // File upload configuration
        $uploadPath = 'assets/admin/uploads/Product/Icons/';
        $config['upload_path'] = $uploadPath;
        $config['max_size'] = '*';
        $config['allowed_types'] = 'jpg|jpeg|png';
        
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
        $icon=$_FILES['file']['name'];
        }
        else
        {
            $icon=$_POST['old_icon'];
        }
        //icon code end
         if(!empty($_FILES['images']['name']))
        {
        $ext = pathinfo($_FILES['images']['name'], PATHINFO_EXTENSION);
        $_FILES['file']['name']     = "Product-image-".date("Y-m-d-H-i-s").".".$ext;
        $_FILES['file']['type']     = $_FILES['images']['type'];
        $_FILES['file']['tmp_name'] = $_FILES['images']['tmp_name'];
        $_FILES['file']['error']     = $_FILES['images']['error'];
        $_FILES['file']['size']     = $_FILES['images']['size'];
        
        // File upload configuration
        $uploadPath = 'assets/admin/uploads/Product/';
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
        	'product_image'=>$pics,'icon'=>$icon,
        	'products'=>$products,'brief'=>$brief,
        	'description'=>$description
        );
         $condition=array(
            'product_id'=>$product_id);
     	
        if($this->Admin_model->update_data($tablename='products',$condition,$data))
        {
            die(json_encode(array('status' =>'1' ,'msg'=>'products Updated Successfully')));
        }
        else{
            die(json_encode(array('status' =>'0' ,'msg'=>'Error while updating user details')));
        }

	}

}
