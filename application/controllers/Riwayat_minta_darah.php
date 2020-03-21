<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat_minta_darah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_riwayat_minta_darah');
    }
    public function index()
    {
        $data['riwayat_minta_darah'] = $this->model_riwayat_minta_darah->list();
        $this->template->load('template_admin','halaman_admin/riwayat_minta_darah',$data);
    }
    public function edit($id)
    {
        if ($this->input->post() && !empty($id)) {
            $this->model_riwayat_minta_darah->edit($id);
        }
        redirect('riwayat_minta_darah');
    }
    public function delete($id)
    {
        if (!empty($id)) {
            $this->model_riwayat_minta_darah->delete($id);
        }
        redirect('riwayat_minta_darah');
    }
    public function detail($id)
    {
        if (empty($id)) {
            redirect('riwayat_minta_darah');
        }
        $data['detail'] = $this->model_riwayat_minta_darah->detail($id);
        $this->template->load('template_admin','halaman_admin/detail_riwayat_minta_darah',$data);
    }
}
