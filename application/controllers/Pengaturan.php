<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_pengaturan');
    }
    public function index()
    {
        $data['user'] = $this->model_pengaturan->get_data();
        $this->template->load('template_admin','halaman_admin/pengaturan',$data);
    }
    public function edit()
    {
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('golongan_darah', 'Golongan Darah', 'trim|required');
        $this->form_validation->set_rules('rhesus', 'Rhesus', 'trim|required');
        $this->form_validation->set_rules('nomor_hp', 'Nomor Hp', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

        if ($this->form_validation->run() == true) {
            $this->model_pengaturan->edit_data();
            redirect('pengaturan');
        }
        $data['user'] = $this->model_pengaturan->get_data();
        $this->template->load('template_user','halaman_user/edit_profile',$data);
    }
    public function edit_password()
    {
        $this->model_pengaturan->edit_password();
        redirect('pengaturan');
    }
}
