<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends CI_Controller {

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
		$data['mediadata']=$this->db->query("SELECT * FROM media")->result();
		$this->load->view('template/header');
		$this->load->view('media',$data);
		$this->load->view('template/footer',$data);
	}
	public function view_press_release($media_id)
	{
		$data['aboutdata']=$this->db->query("SELECT * FROM about_us")->result();
		$data['chooseus']=$this->db->query("SELECT * FROM chooseus")->result();
		$data['ourteam']=$this->db->query("SELECT * FROM my_team")->result();
		$data['servicedata']=$this->db->query("SELECT * FROM services")->result();
		$data['productdata']=$this->db->query("SELECT * FROM products")->result();
		$data['contactdata']=$this->db->query("SELECT * FROM contact_details")->result();
		$data['mediadata']=$this->db->query("SELECT * FROM media where media_id='$media_id'")->result();
		$this->load->view('template/header');
		$this->load->view('view_media',$data);
		$this->load->view('template/footer',$data);
	}
}
