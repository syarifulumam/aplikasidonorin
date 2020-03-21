<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_profile extends CI_Model
{
    public function data_user()
    {
       return $this->db->get_where('users',array('id_users'=>$this->session->id))->row();
    }   
    public function riwayat_donor()
    {
       return $this->db->get_where('riwayat_pendonor',array('id_user'=>$this->session->id))->result();
    }   
    public function riwayat_minta_darah()
    {
       return $this->db->get_where('riwayat_minta_darah',array('id_user'=>$this->session->id))->result();
    }   
}
