<?php

class Email_controller extends CI_controller{
    function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
    }
}

    public function index(){
        $this->load->helper('form');
        $this->load->view('email_form');
    }

    public function send_mail(){

        $from_email="gleb.faizov.87@mail.ru";
        $to_email="glebfaizov@gmail.com";

        $this->load->library('email');
        $this->email->from($from_email,"Email.php");
        $this->email->to($to_mail);
        $this->email->subject('Email Test');
        $this->email->message('Testing the email class');
        if($this->email->send()){
            echo("Email delivered successfully");
        }
        else{
            echo("fasdf");
        }
    }

?>