<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){	
		parent::__construct();
		// $this->load->model('HomeModel','Home');

	}
	public function index()
	{
		$data['testimonial']=$this->db->query("SELECT * FROM testimonial")->result();
		$data['contactdata']=$this->db->query("SELECT * FROM contact_details")->result();
		$data['servicedata']=$this->db->query("SELECT * FROM services")->result();
		$data['productdata']=$this->db->query("SELECT * FROM products")->result();
		$data['chooseus']=$this->db->query("SELECT * FROM chooseus")->result();
	//	$data['offerdata']=$this->db->query("SELECT  TOP 4 * FROM offers")->result();
		$this->load->view('template/header');
		$this->load->view('index',$data);
		$this->load->view('template/footer',$data);
	}
}
