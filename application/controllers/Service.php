<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

	public function __construct(){	
		parent::__construct();
		// $this->load->model('HomeModel','Home');

	}
	public function index()
	{
		$data['testimonial']=$this->db->query("SELECT * FROM testimonial")->result();
		$data['chooseus']=$this->db->query("SELECT * FROM chooseus")->result();
		$data['contactdata']=$this->db->query("SELECT * FROM contact_details")->result();
		$data['servicedata']=$this->db->query("SELECT * FROM services")->result();
		$data['productdata']=$this->db->query("SELECT * FROM products")->result();
		$this->load->view('template/header');
		$this->load->view('service',$data);
		$this->load->view('template/footer',$data);
	}
	public function view_services($service_id)
	{
		$data['testimonial']=$this->db->query("SELECT * FROM testimonial")->result();
		$data['chooseus']=$this->db->query("SELECT * FROM chooseus")->result();
		$data['contactdata']=$this->db->query("SELECT * FROM contact_details")->result();
		$data['servicedata']=$this->db->query("SELECT * FROM services")->result();
		$data['productdata']=$this->db->query("SELECT * FROM products")->result();
		$data['servicesdata']=$this->db->query("SELECT * FROM services where service_id='$service_id'")->result();
		$this->load->view('template/header');
		$this->load->view('view_services',$data);
		$this->load->view('template/footer',$data);
	}
}
