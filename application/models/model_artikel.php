<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_artikel extends CI_Model
{
    public function get_data($id = null)
    {
        if (empty($id)) {
            $this->db->order_by('id_artikel', 'DESC');
            return $this->db->get('artikel')->result();
        } else {
            return $this->db->get_where('artikel',array('id_artikel'=>$id))->row();
        }
    }
    public function detail_artikel($url)
    {
        return $this->db->get_where('artikel',array('url'=>$url))->row();
    }
    public function add_data()
    {
        //foto
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ( !$this->upload->do_upload('foto'))
		{
            $this->session->set_flashdata('pesan',$this->upload->display_errors());
            redirect('artikel');
		}
		else
		{
			$data_tempat['cover'] = $this->upload->data('file_name');
        }
        
        $data = [
            'judul'     => $this->input->post('judul'),
            'konten'    => $this->input->post('konten'),
            'url'       => $this->input->post('url'),
            'thumbnail' => $data_tempat['cover']
        ];

        $this->db->insert('artikel',$data);
        $this->session->set_flashdata('pesan', 'Data berhasil ditambahkan');
        redirect('artikel');
    }
    public function edit_data()
    {
        $data = [
            'judul'  => $this->input->post('judul'),
            'konten' => $this->input->post('konten'),
            'url'    => $this->input->post('url')
        ];
        $this->db->where('id_artikel',$this->input->post('id'));
        $this->db->update('artikel',$data);
        $this->session->set_flashdata('pesan', 'Data berhasil diubah');
        redirect('artikel');
    }
    public function delete($id)
    {
        $this->db->delete('artikel',array('id_artikel'=>$id));
        $this->session->set_flashdata('pesan', 'Data berhasil dihapus');
        redirect('artikel');   
    }
}
