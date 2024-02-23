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
		$phone = $_POST['phone'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $userMessage = $_POST['message']; // Renamed to avoid confusion with the email $message variable
        
        // Email content
        $message = '
        <h4>You Got a New Inquiry</h4>
        <table style="border:1px solid black">
            <tr>
                <td><strong>Name:</strong></td>
                <td>' . $name . '</td>
            </tr>
            <tr>
                <td><strong>Email:</strong></td>
                <td>' . $email . '</td>
            </tr>
            <tr>
                <td><strong>Phone:</strong></td>
                <td>' . $phone . '</td>
            </tr>
            <tr>
                <td><strong>Subject:</strong></td>
                <td>' . $subject . '</td>
            </tr>
            <tr>
                <td><strong>Message:</strong></td>
                <td>' . $userMessage . '</td>
            </tr>
        </table>';

    	$this->load->library('phpmailer_lib');
        $mail = $this->phpmailer_lib->load();
        $mail-> isSMTP();
        $mail->Host     = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'ravish@jogsportswear.com';
        $mail->Password = 'rzpcipmlverqzcxo';
        $mail->SMTPSecure = 'tls';
        $mail->Port     = 587;
        $mail->setFrom('ravish@jogsportswear.com', 'JOG INDIA');
        // Add a recipient
       // $mail->addAddress('info@asiaiceevents.com');
        $mail->addAddress('ravish@jogsportswear.com');
        // Email subject
        $mail->Subject = 'Lead From JOG DIGITAL INNOVATIONS';
        
        // Set email format to HTML
        $mail->isHTML(true);
        $mail->Body = $message;


        if(!$mail->send())
        {
          	echo $this->email->print_debugger();
        }
        else
        {
        	die(json_encode(array('status' =>'1' ,'msg'=>'We will contact you shortly')));
			
        }
		 
			 //ini_set("smtp_port","25");
// 			$this->load->library('email');
            
//             $config['SMTPAuth'] = TRUE;
//             $config['SMTPSecure'] = 'ssl';
//  			$config['protocol']    = 'smtp';
// 			$config['smtp_host']    = 'smtp.zoho.in';
// 			$config['smtp_port']    = '465';
// 			$config['smtp_timeout'] = '7';
// 			$config['smtp_user']    = 'info@etechify.com';
// 			$config['smtp_pass']    = 'Rendezvous@1';
// 			$config['charset']    = 'utf-8';
// 			$config['newline']    = "\r\n";
// 			$config['mailtype'] = 'html'; // or html
// 			$config['validation'] = FALSE; // bool whether to validate email or not      

// 			$this->email->initialize($config);

// 			$this->email->from('info@etechify.comm','ETECHIFY');
// 			$this->email->to('info@etechify.com'); 
// 			$this->email->subject($subject);
// 			$this->email->message($message);  

// 			if($this->email->send())
// 			{
// 			die(json_encode(array('status' =>'1' ,'msg'=>'Mail is sended Successfully')));
// 			}
// 			echo $this->email->print_debugger();

	}

}
