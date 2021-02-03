<?php

class Auth extends CI_Controller{

    public function login(){

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run()){

            $username = $_POST['username'];
            $password = $_POST['password'];

            $this->db->select('*');
            $this->db->from('users');
            $this->db->where(array('username' => $username, 'password' => $password));

            $query = $this->db->get();

            $user = $query->row();

            if ($user->username) {
                $this->session->set_flashdata("success", "Login Successfully!");

                $_SESSION['user_logged'] = TRUE;
                $_SESSION['username'] = $user->username;
            }
            else{
                $this->session->set_flashdata("error", "Invalid Username or Password");
            }
        }
      
        $this->load->view('templates/login');
    }

    public function register(){


       
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[12]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('repass', 'Confirm Password', 'trim|required|matches[password]');
        $this->form_validation->set_rules('role', 'Role', 'required');

        if($this->form_validation->run()){

            $data = array(
                'username' => $_POST['username'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'repass' => $_POST['repass'],
                'role' => $_POST['role'],
            );

            $this->db->insert('users', $data);

            $this->session->set_flashdata("success", "Successfully Registered!");
            


        }




        $this->load->view('templates/register');
    }
}