<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_register');
    }
    public function index()
    {
        if (isset($this->session->id)) {
            redirect('profile');
        }
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('terakhir_donor', 'Terakhir Donor', 'trim|required');
        $this->form_validation->set_rules('golongan_darah', 'Golongan Darah', 'trim|required');
        $this->form_validation->set_rules('rhesus', 'Rhesus', 'trim|required');
        $this->form_validation->set_rules('nomor_hp', 'Nomor Hp', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == true) {
            $this->model_register->proses();
        }
        $this->template->load('template_user','halaman_user/register');
    }
}
