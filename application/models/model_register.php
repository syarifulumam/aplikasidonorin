<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_register extends CI_Model
{
    public function proses()
    {
        //foto
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$this->load->library('upload', $config);
		// validasi upload foto 
		      
		if ( !$this->upload->do_upload('foto'))
		{
            $this->session->set_flashdata('gagal',$this->upload->display_errors());
            redirect('register');
		}
		else
		{
			$data_tempat['cover'] = $this->upload->data('file_name');
        }
        
        $data = [
			'nama' 				=> $this->input->post('nama_lengkap',true),
			'golongan_darah'	=> $this->input->post('golongan_darah',true),
			'jenis_kelamin'		=> $this->input->post('jenis_kelamin',true),
			'rhesus' 			=> $this->input->post('rhesus',true),
			'tanggal_mulai_donor' 	=> $this->input->post('terakhir_donor',true),
			'tanggal_donor' 	=> date('Y-m-d', strtotime('+3 month', strtotime($this->input->post('terakhir_donor')))),
			'tempat_lahir' 		=> $this->input->post('tempat_lahir',true),
			'tanggal_lahir' 	=> $this->input->post('tanggal_lahir',true),
			'nomor_hp' 			=> $this->input->post('nomor_hp',true),
			'alamat' 			=> $this->input->post('alamat',true),
			'email' 			=> $this->input->post('email',true),
			'password' 			=> password_hash($this->input->post('password',true),PASSWORD_DEFAULT),
			'foto' 				=> $data_tempat['cover']
        ];
		$this->db->insert('users',$data);
		$this->session->set_flashdata('success','Akun berhasil dibuat');
        redirect('login');
    }
}
