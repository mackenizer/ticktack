<?php

class Auth extends CI_Controller{

    public function login(){
      
        $this->load->view('templates/login');
    }

    public function register(){

        $this->load->view('templates/register');
    }
}