<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendonor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_pendonor');
    }
    public function index()
    {
        $data['pendonor'] = $this->model_pendonor->list();
        $this->template->load('template_admin','halaman_admin/pendonor',$data);
    }
    public function edit($id)
    {
        if ($this->input->post() && !empty($id)) {
            $this->model_pendonor->edit($id);
        }
    }
    public function delete($id)
    {
        if (!empty($id)) {
            $this->model_pendonor->delete($id);
        }
        redirect('pendonor');
    }
}
