<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permintaan_darah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_permintaan_darah');
    }
    public function index()
    {
        //cek session 
        if (empty($this->session->id)) {
            $this->session->set_flashdata('gagal','Harap Login terlebih dahulu');
            redirect('login');
        }
        $this->template->load('template_user','halaman_user/permintaan_darah');
    }
    public function daftar()
    {
        $this->form_validation->set_rules('nama_pasien', 'Nama Pasien', 'trim|required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
        $this->form_validation->set_rules('nomor_hp', 'Nomor Hp', 'trim|required');
        $this->form_validation->set_rules('kebutuhan', 'Kebutuhan', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('golongan', 'Golongan Darah', 'trim|required');
        $this->form_validation->set_rules('rhesus', 'Rhesus', 'trim|required');
        $this->form_validation->set_rules('jumlah_darah', 'Jumlah Darah', 'trim|required');

        if ($this->form_validation->run() == true) {
            $this->model_permintaan_darah->daftar();
        }
        $this->template->load('template_user','halaman_user/permintaan_darah');
    }
}
