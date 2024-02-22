<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

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
		$this->load->view('products',$data);
		$this->load->view('template/footer',$data);
	}
	public function view_products($product_id)
	{
		$data['testimonial']=$this->db->query("SELECT * FROM testimonial")->result();
		$data['chooseus']=$this->db->query("SELECT * FROM chooseus")->result();
		$data['contactdata']=$this->db->query("SELECT * FROM contact_details")->result();
		$data['servicedata']=$this->db->query("SELECT * FROM services")->result();
		$data['productdata']=$this->db->query("SELECT * FROM products")->result();
		$data['productsdata']=$this->db->query("SELECT * FROM products where product_id='$product_id'")->result();
		$this->load->view('template/header');
		$this->load->view('view_products',$data);
		$this->load->view('template/footer',$data);
	}
}
