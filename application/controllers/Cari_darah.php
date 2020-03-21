<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cari_darah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('ayodonor');
        $this->load->model('model_donor');
    }
    public function index()
    {
        
        //cari data
        if($this->input->post()){
            $provinsi = $this->input->post('provinsi');
            $golongan = $this->input->post('golongan');
            $komponen = $this->input->post('komponen');
            //data API dari library ayodonor      
            $profile = $this->ayodonor->http_request("https://sites.google.com/macros/exec?service=AKfycbxENZUqbOHUz7c7CevxlMJMkjxRMtP5rRim-SjFwcLSO9UDiBk&gol=".$golongan."&produk=".$komponen."&provinsi=".$provinsi."");
        }else{
            //data API dari library ayodonor      
            $profile = $this->ayodonor->http_request("https://sites.google.com/macros/exec?service=AKfycbxENZUqbOHUz7c7CevxlMJMkjxRMtP5rRim-SjFwcLSO9UDiBk&gol=a_pos&produk=AHF&provinsi=Jawa+Barat");
        }
        
        // ubah string JSON menjadi array
        $profile = json_decode($profile, TRUE);

        //pagination
        $this->load->library('pagination');

        $config['base_url'] = base_url('cari_darah/index');
        $config['total_rows'] = count($profile['data']);
        $config['per_page'] = 5;

        //style pagination
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging"><nav><ul class="pagination ">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);

        $start_page_data = $this->uri->segment(3);
        if ($start_page_data == null) {
            $start_page_data = 0;
        }

        $data['donor'] = array_slice( $profile['data'],$start_page_data,5);
        $data['provinsi'] = $this->model_donor->get_data_provinsi();

        $this->template->load('template_user','halaman_user/cari_darah',$data);
    }

}
