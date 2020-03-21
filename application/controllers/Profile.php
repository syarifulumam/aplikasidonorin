<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_profile');
        $this->load->model('model_pengaturan');
    }
    public function index()
    {
        if (empty($this->session->id)) {
            redirect(login);
        }
        $data['user'] = $this->model_profile->data_user();
        $data['donor_darah'] = $this->model_profile->riwayat_donor();
        $data['minta_darah'] = $this->model_profile->riwayat_minta_darah();
        $this->template->load('template_user','halaman_user/profile',$data);
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
            redirect('profile');
        }
        $data['user'] = $this->model_pengaturan->get_data();
        $this->template->load('template_user','halaman_user/edit_profile',$data);
    }
    public function edit_password()
    {
        $this->form_validation->set_rules('password_lama', 'Password Lama', 'trim|required');
        $this->form_validation->set_rules('password_baru', 'Password Baru', 'trim|required');
        $this->form_validation->set_rules('password_verif', 'Password Verif', 'trim|required');
        if ($this->form_validation->run() == false) {
		    $this->session->set_flashdata('pesan','Gagal');
            redirect('profile');
        }
        $this->model_pengaturan->edit_password();
        redirect('profile');
    }
}
