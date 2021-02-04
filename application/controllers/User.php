<?php

class User extends CI_Controller{

    public function __construct(){

        parent::__construct();

        if($_SESSION['user_logged'] == false) {
            $this->session->set_flashdata("error", "Login Expired!");
            redirect('index.php/auth/login');
            
        }
    }
    
    public function dashboard(){

        
        $this->load->view('templates/dashboard');
    }
}