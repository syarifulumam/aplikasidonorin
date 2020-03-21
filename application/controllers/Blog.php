<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_artikel');
    }
    public function index()
    {
        $data['artikel'] = $this->model_artikel->get_data();
        $this->template->load('template_user','halaman_user/blog',$data);
    }
    //detail artikel
    public function p($url)
    {
        $data['artikel'] = $this->model_artikel->detail_artikel($url);
        $this->template->load('template_user','halaman_user/artikel',$data);
    }
}
