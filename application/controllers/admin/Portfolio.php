<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {

	public function __construct(){	
		parent::__construct();
		$this->load->model('Admin_model');

	}
	public function index()
	{
		$data['port_category']=$this->db->query("SELECT * FROM port_category")->result();
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/add_portfolio',$data);
		$this->load->view('admin/template/footer');
	}
	public function add_portcat()
	{	
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/add_portcat');
		$this->load->view('admin/template/footer');
	}
	public function view_portfolio_list()
	{
		$data['portfoliodata']=$this->db->query("SELECT * FROM portfolio join port_category on portfolio.portcat_id=port_category.portcat_id")->result();
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/viewportfoliolist',$data);
		$this->load->view('admin/template/footer');
	}
	public function view_portcat_list()
	{
		$data['portcatdata']=$this->db->query("SELECT * FROM port_category")->result();
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/viewportcatlist',$data);
		$this->load->view('admin/template/footer');
	}
	public function insertportcat()
	{      

		$data = array(); 	
    	$portcat_name=$_POST['portcat_name'];
    	$data = array(
                	'portcat_name'=>$portcat_name
                );
	 	$result=$this->Admin_model->insert_data($tablename='port_category',$data);
		if($result)
		{
			die(json_encode(array('status' =>'1' ,'msg'=>'Portfolio category Inserted Successfully')));
		}
		else{
			die(json_encode(array('status' =>'0' ,'msg'=>'Error')));
		}
    		
    }
	public function insertdata()
	{
		$data = array();
	        // If file upload form submitted
        if(!empty($_FILES['portfolioimage']['name']))
        {		
        		$portcat_id=$_POST['portcat_id'];
        		$projectname=$_POST['projectname'];
        		$url=$_POST['url'];
        		date_default_timezone_set("Asia/Kolkata");
        		$timenow = date('Y-m-d H:i:s');
                $ext = pathinfo($_FILES['portfolioimage']['name'], PATHINFO_EXTENSION);
                $_FILES['file']['name']     = "Portfolio-image-".date("Y-m-d-H-i-s").".".$ext;
                $_FILES['file']['type']     = $_FILES['portfolioimage']['type'];
                $_FILES['file']['tmp_name'] = $_FILES['portfolioimage']['tmp_name'];
                $_FILES['file']['error']    = $_FILES['portfolioimage']['error'];
                $_FILES['file']['size']     = $_FILES['portfolioimage']['size'];
                
                // File upload configuration
                $uploadPath = 'assets/admin/uploads/Portfolio/';
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
                	'portcat_id'=>$portcat_id,
                	'port_name'=>$projectname,
                	'port_image'=>$pics,
                	'port_url'=>$url
                );
                $result=$this->Admin_model->insert_data($tablename='portfolio',$data);
				if($result)
				{
					die(json_encode(array('status' =>'1' ,'msg'=>'Portfolio added Successfully')));
				}
				else
				{
					die(json_encode(array('status' =>'0' ,'msg'=>'Error')));
				}

            }
        }
	}
		public function resizeImage($filename)
	{
	      $source_path = $_SERVER['DOCUMENT_ROOT'] . '/visiontechnosoft/assets/admin/uploads/Portfolio/' . $filename;//
	      $target_path = $_SERVER['DOCUMENT_ROOT'] . '/visiontechnosoft/assets/admin/uploads/Portfolio/';
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
   	public function deleteportfolio()
   	{
		$image_path='assets/admin/uploads/Portfolio/';
		$image_name=$_POST['image_name'];
		$data=array("port_id"=>$this->input->post('port_id'));
		if($this->Admin_model->delete_data('portfolio',$data))
		{
			$filename = $image_path . $image_name; 
	        if (file_exists($filename))
	        {
	            unlink($filename);
	        }
			die(json_encode(array("status"=>1,"msg"=>"Portfolio data Deleted Successfully.")));
		}
		else
		{
			die(json_encode(array("status"=>0,"msg"=>"Failed To Delete.")));
		}
	}
	public function deleteportfoliocat()
   	{
		$data=array("portcat_id"=>$this->input->post('portcat_id'));
		if($this->Admin_model->delete_data('port_category',$data))
		{
			die(json_encode(array("status"=>1,"msg"=>"Portfolio category Deleted Successfully.")));
		}
		else
		{
			die(json_encode(array("status"=>0,"msg"=>"Failed To Delete.")));
		}
	}
}
