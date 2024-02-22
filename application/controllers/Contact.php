<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct(){	
		parent::__construct();
		// $this->load->model('HomeModel','Home');
	}
	public function index()
	{
		$data['contactdata']=$this->db->query("SELECT * FROM contact_details")->result();
		$data['servicedata']=$this->db->query("SELECT * FROM services")->result();
		$data['productdata']=$this->db->query("SELECT * FROM products")->result();
		$data['testimonial']=$this->db->query("SELECT * FROM testimonial")->result();
		$data['chooseus']=$this->db->query("SELECT * FROM chooseus")->result();
		$this->load->view('template/header');
		$this->load->view('contact',$data);
		$this->load->view('template/footer',$data);
	}
	public function sendmail()
	{
		$phone=$_POST['phone'];
		 $name=$_POST['name'];
		 $email=$_POST['email'];
		 $subject=$_POST['subject'];
		 $message=$_POST['message'];
		// //Email content
		 $message='<h4>You Got a New Inquiry</h4>'.'<br>'.'Message:<p>'.$message.'</p><br><br>'.'From'.'<br>'.'Name:'.$name.'<br>'.'Email:'.$email.'<br>'.'Phone:'.$phone.'<br>';
			 ini_set("smtp_port","25");
			$this->load->library('email');
            
            $config['SMTPAuth'] = FALSE;
            $config['SMTPSecure'] = 'ssl';
 			$config['protocol']    = 'smtp';
			$config['smtp_host']    = 'smtp.zoho.in';
			$config['smtp_port']    = '465';
			$config['smtp_timeout'] = '7';
			$config['smtp_user']    = 'info@etechify.com';
			$config['smtp_pass']    = 'Rendezvous@1';
			$config['charset']    = 'utf-8';
			$config['newline']    = "\r\n";
			$config['mailtype'] = 'html'; // or html
			$config['validation'] = FALSE; // bool whether to validate email or not      

			$this->email->initialize($config);

			$this->email->from('info@etechify.comm','ETECHIFY');
			$this->email->to('info@etechify.com'); 
			$this->email->subject($subject);
			$this->email->message($message);  

			if($this->email->send())
			{
			die(json_encode(array('status' =>'1' ,'msg'=>'Mail is sended Successfully')));
			}
			echo $this->email->print_debugger();

	}

}
