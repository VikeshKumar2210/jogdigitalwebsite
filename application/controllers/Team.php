
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {

	public function __construct(){	
		parent::__construct();
		// $this->load->model('HomeModel','Home');

	}
	public function index()
	{
		$data['ourteam']=$this->db->query("SELECT * FROM my_team")->result();
		$data['chooseus']=$this->db->query("SELECT * FROM chooseus")->result();
		$data['contactdata']=$this->db->query("SELECT * FROM contact_details")->result();
		$data['servicedata']=$this->db->query("SELECT * FROM services")->result();
		$data['productdata']=$this->db->query("SELECT * FROM products")->result();
		$this->load->view('template/header');
		$this->load->view('team',$data);
		$this->load->view('template/footer',$data);
	}
}
