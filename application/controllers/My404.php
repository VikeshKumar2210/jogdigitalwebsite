<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My404 extends CI_Controller {

	public function __construct(){	
		parent::__construct();
		// $this->load->model('HomeModel','Home');

	}
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('404');
		$this->load->view('template/footer');
	}
}
