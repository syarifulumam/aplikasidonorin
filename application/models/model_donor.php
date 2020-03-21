<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_donor extends CI_Model
{
    public function daftar()
    {
        $data = [
            'id_user' => $this->session->id,
            'nama_tempat' => $this->input->post('data[instansi]',true),
            'alamat' => $this->input->post('data[alamat]',true),
            'tanggal_donor' => date("Y-m-d")
        ];
        $this->db->insert('riwayat_pendonor',$data);
        redirect('profile');
    }
    public function get_data_provinsi()
    {
        return $this->db->get('provinsi')->result();
    }
}
