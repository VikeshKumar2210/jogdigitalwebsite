
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {

	public function __construct(){	
		parent::__construct();
		// $this->load->model('HomeModel','Home');

	}
	public function index()
	{
		
		$data['portfolio']=$this->db->query("SELECT * FROM portfolio join port_category on portfolio.portcat_id=port_category.portcat_id")->result();
		if(!empty($data['portfolio']))
		{
			$data['port_category']=$this->db->query("SELECT * FROM port_category join Portfolio on Portfolio.portcat_id=port_category.portcat_id")->result();
		}
		else
		{
			$data['port_category']=array();
		}
		$data['testimonial']=$this->db->query("SELECT * FROM testimonial")->result();
		$data['contactdata']=$this->db->query("SELECT * FROM contact_details")->result();
		$data['servicedata']=$this->db->query("SELECT * FROM services")->result();
		$data['productdata']=$this->db->query("SELECT * FROM products")->result();
		$data['techdata']=$this->db->query("SELECT * FROM technology")->result();
		$this->load->view('template/header');
		$this->load->view('portfolio',$data);
		$this->load->view('template/footer',$data);
	}
}
