<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_login extends CI_Model
{
    public function proses()
    {
        $email    = $this->input->post('email');
        $password = $this->input->post('password');
        $cek_akun = $this->db->get_where('users',array('email'=>$email));

        //validasi email
        if ($cek_akun->num_rows() != null) {
            //validasi password
            if (password_verify($password,$cek_akun->row()->password)) {
                $this->session->set_userdata('id',$cek_akun->row()->id_users);
                $this->session->set_userdata('status',$cek_akun->row()->status);
                if ($cek_akun->row()->status == 1) {
                    redirect('pendonor');
                } else {
                    redirect('profile');
                }
                
            } else {
                $this->session->set_flashdata('gagal','<b>Password</b> salah');
            }
        } else {
            $this->session->set_flashdata('gagal','<b>Email</b> tidak terdaftar');
        }
        
    }
}
