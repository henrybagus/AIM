<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        session_start();
        parent::__construct();
//		$this->session_checking->cek_user();
    }


    public function index()
    {
        if ($this->session->userdata('username') == NULL) {
            $this->login();
        } else {
            $this->load->view('Template/V_header');
            $this->load->view('Template/V_sidebar');
            $this->load->view('Template/V_content');
            $this->load->view('Template/V_footer');
        }
    }

    public function login()
    {
        $this->form_validation->set_error_delimiters('<span style="color:red">', '</span>');
        $this->form_validation->set_rules('username', 'Username', 'required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'required|xss_clean');
        if ($this->form_validation->run() == true) {
            $username = $this->input->post('username');
            $pass = $this->input->post('password');
            if ($this->cek_username($username, $pass)) {
                $this->session->set_userdata('username', $username);
                redirect(base_url(''));
            } else {
                $this->data['password'] = array(
                    'name' => 'password',
                    'id' => 'password',
                    'type' => 'password',
                    'class' => 'form-control input-lg',
                    'placeholder' => 'Password',
                    'value' => $this->form_validation->set_value('password')
                );
                $this->data['username'] = array(
                    'name' => 'username',
                    'id' => 'username',
                    'type' => 'text',
                    'class' => 'form-control input-lg',
                    'placeholder' => 'Username',
                    'value' => $this->form_validation->set_value('username')
                );
                $this->load->view('login', $this->data);
            }
        } else {
            $this->data['password'] = array(
                'name' => 'password',
                'id' => 'password',
                'type' => 'password',
                'class' => 'form-control input-lg',
                'placeholder' => 'Password',
                'value' => $this->form_validation->set_value('password')
            );
            $this->data['username'] = array(
                'name' => 'username',
                'id' => 'username',
                'type' => 'text',
                'class' => 'form-control input-lg',
                'placeholder' => 'Username',
                'value' => $this->form_validation->set_value('username')
            );
            $this->load->view('login', $this->data);
        }

    }

    public function cek_username($username, $password)
    {
        if (($username == 'administrator') && ($password == '41m')) {
            return true;
        } else {
            return false;
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url());
    }

}