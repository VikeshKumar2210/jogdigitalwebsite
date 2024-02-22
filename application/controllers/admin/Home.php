<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){	
		parent::__construct();
		// $this->load->model('HomeModel','Home');

	}
	public function index()
	{
		if(isset($_SESSION['logged_in'][0]->admin_id))
		{
			$query=$this->db->query("SELECT * FROM portfolio")->result();
			$data['countportfolio']=count($query);
			$query1=$this->db->query("SELECT * FROM services")->result();
			$data['countservice']=count($query1);
			$query2=$this->db->query("SELECT * FROM products")->result();
			$data['countproduct']=count($query2);
			$query3=$this->db->query("SELECT * FROM my_team")->result();
			$data['countourteam']=count($query3);
			$data['admindata']=$this->db->query("SELECT * FROM admin")->result();
			$this->load->view('admin/template/sidebar');
			$this->load->view('admin/index',$data);
			$this->load->view('admin/template/footer');
		}
		else
		{
			$this->load->view('admin/login');
		}
	}
}
