<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_pengguna');
    }
    public function index()
    {
        $data['pengguna'] = $this->model_pengguna->list();
        $this->template->load('template_admin','halaman_admin/pengguna',$data);
    }
    public function edit($id)
    {
        if ($this->input->post() && !empty($id)) {
            $this->model_pengguna->edit($id);
        }
        redirect('pengguna');
    }
    public function delete($id)
    {
        if (!empty($id)) {
            $this->model_pengguna->delete($id);
        }
        redirect('pengguna');
    }
    public function detail($id)
    {
        if (empty($id)) {
            redirect('pengguna');
        }
        $data['detail'] = $this->model_pengguna->detail($id);
        $this->template->load('template_admin','halaman_admin/detail_pengguna',$data);
    }
}
