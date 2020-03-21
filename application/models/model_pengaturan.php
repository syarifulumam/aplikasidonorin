<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_pengaturan extends CI_Model
{
    public function get_data()
    {
       return $this->db->get_where('users',array('id_users'=>$this->session->id))->row();
    }
    public function edit_data()
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
			$data_tempat['cover'] = $this->db->get_where('users',array('id_users'=>$this->session->id))->row()->foto;
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
			'tempat_lahir' 		=> $this->input->post('tempat_lahir',true),
			'tanggal_lahir' 	=> $this->input->post('tanggal_lahir',true),
			'nomor_hp' 			=> $this->input->post('nomor_hp',true),
			'alamat' 			=> $this->input->post('alamat',true),
			'email' 			=> $this->input->post('email',true),
			'foto' 				=> $data_tempat['cover']
		];
		$this->db->where('id_users',$this->session->id);
		$this->db->update('users',$data);
		$this->session->set_flashdata('pesan','Data berhasil diubah');
		$this->session->set_flashdata('success','Data berhasil diubah');
	}
	public function edit_password()
	{
		$data_user = $this->db->get_where('users',array('id_users'=>$this->session->id))->row()->password;
		if (password_verify($this->input->post('password_lama'),$data_user)) {
			if ($this->input->post('password_baru') != $this->input->post('password_verif')) {
				$this->session->set_flashdata('pesan','Gagal, password tidak sama');
				$this->session->set_flashdata('gagal','Gagal, password tidak sama');
			}
				$this->db->set('password', password_hash($this->input->post('password_baru',true),PASSWORD_DEFAULT));
				$this->db->where('id_users', $this->session->id);
				$this->db->update('users');
				$this->session->set_flashdata('pesan','Password berhasil diubah');
				$this->session->set_flashdata('success','Data berhasil diubah');
		} else {
			$this->session->set_flashdata('pesan','Gagal, password tidak sama');
			$this->session->set_flashdata('gagal','Gagal, password tidak sama');
		}
		
	}
}
