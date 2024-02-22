<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {

	public function __construct(){	
		parent::__construct();
		$this->load->model('Admin_model');

	}
	public function index()
	{
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/add_team');
		$this->load->view('admin/template/footer');
	}
	public function view_team_list()
	{
		$data['teamdata']=$this->db->query("SELECT * FROM my_team")->result();
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/viewteamlist',$data);
		$this->load->view('admin/template/footer');
	}
	public function insertdata()
	{
		$data = array();
	        // If file upload form submitted
        if(!empty($_FILES['images']['name']))
        {		
        		$name=$_POST['name'];
        		$designation=$_POST['designation'];
        		$profile=$_POST['profile'];
        		date_default_timezone_set("Asia/Kolkata");
        		$timenow = date('Y-m-d H:i:s');
                $ext = pathinfo($_FILES['images']['name'], PATHINFO_EXTENSION);
                $_FILES['file']['name']     = "Team-image-".date("Y-m-d-H-i-s").".".$ext;
                $_FILES['file']['type']     = $_FILES['images']['type'];
                $_FILES['file']['tmp_name'] = $_FILES['images']['tmp_name'];
                $_FILES['file']['error']     = $_FILES['images']['error'];
                $_FILES['file']['size']     = $_FILES['images']['size'];
                
                // File upload configuration
                $uploadPath = 'assets/admin/uploads/team/';
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
                	'team_name'=>$name,
                	'team_designation'=>$designation,
                	'team_profile'=>$profile,
                	'team_image'=>$pics
                );
                $result=$this->Admin_model->insert_data($tablename='my_team',$data);
				if($result){
					die(json_encode(array('status' =>'1' ,'msg'=>'Team Memberr Added Successfully')));
				}
				else{
					die(json_encode(array('status' =>'0' ,'msg'=>'Error')));
				}

            }
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
   	public function deleteteam()
   	{
		$image_path='assets/admin/uploads/team/';
		$image_name=$_POST['image_name'];
		$data=array("team_id"=>$this->input->post('team_id'));
		if($this->Admin_model->delete_data('my_team',$data))
		{
			$filename = $image_path . $image_name; 
	        if (file_exists($filename))
	        {
	            unlink($filename);
	        }
			die(json_encode(array("status"=>1,"msg"=>"Team member Deleted Successfully.")));
		}
		else
		{
			die(json_encode(array("status"=>0,"msg"=>"Failed To Delete.")));
		}
	}
}
