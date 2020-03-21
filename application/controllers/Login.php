<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_login');
    }
    public function index()
    {
        if (isset($this->session->id)) {
            redirect('profile');
        }
        $this->form_validation->set_rules('email', 'Email', 'valid_email|trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == true) {
            $this->model_login->proses();
        }
        $this->template->load('template_user','halaman_user/login');
    }
}
