<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('simple_html_dom');

    } 
    public function index()
    {
        $url = file_get_html('http://ayodonor.pmi.or.id/');
        $result = explode("data: [", $url,2);
        $result = "[".explode("]", $result[1], 2)[0]."]";
        $result = preg_replace("/[^0-9]/", " ", $result);
        $data['stok'] = explode(' ',$result);
        $this->template->load('template_user','halaman_user/home',$data);
    }
    public function logout()
    {
        if (empty($this->session->id)) {
            redirect('login');
        }
        $this->session->unset_userdata('id');
        redirect('login');
    }
}
