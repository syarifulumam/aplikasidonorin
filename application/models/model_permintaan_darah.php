<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_permintaan_darah extends CI_Model
{
	public function daftar()
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
            redirect('permintaan_darah');
		}
		else
		{
			$foto['cover'] = $this->upload->data('file_name');
		}
 
        $data = [
			'id_user' 			=> $this->session->id,
			'id_tempat'			=> $this->input->post('id',true),
			'nama_pasien'		=> $this->input->post('nama_pasien',true),
			'golongan' 			=> $this->input->post('golongan',true),
			'rhesus' 			=> $this->input->post('rhesus',true),
			'jenis_kelamin' 	=> $this->input->post('jenis_kelamin',true),
			'alamat' 			=> $this->input->post('alamat',true),
			'nama_tempat' 		=> $this->input->post('nama_tempat',true),
			'jumlah_darah' 		=> $this->input->post('jumlah_darah',true),
			'batas_waktu'		=> date('Y-m-d', strtotime('+3 day')),
			'kebutuhan' 		=> $this->input->post('kebutuhan',true),
			'foto' 				=> $foto['cover']
		];
		$this->db->insert('riwayat_minta_darah',$data);
        redirect('profile');
    }
}
