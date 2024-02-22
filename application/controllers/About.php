<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct(){	
		parent::__construct();
		// $this->load->model('HomeModel','Home');

	}
	public function index()
	{
		$data['aboutdata']=$this->db->query("SELECT * FROM about_us")->result();
		$data['chooseus']=$this->db->query("SELECT * FROM chooseus")->result();
		$data['ourteam']=$this->db->query("SELECT * FROM my_team")->result();
		$data['servicedata']=$this->db->query("SELECT * FROM services")->result();
		$data['productdata']=$this->db->query("SELECT * FROM products")->result();
		$data['contactdata']=$this->db->query("SELECT * FROM contact_details")->result();
		$this->load->view('template/header');
		$this->load->view('about',$data);
		$this->load->view('template/footer',$data);
	}
}
