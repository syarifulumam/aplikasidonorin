<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_riwayat_minta_darah extends CI_Model
{
    public function list()
    {
        return $this->db->query("SELECT * FROM riwayat_minta_darah ORDER BY id_riwayat_minta_darah DESC")->result();
    }
    public function edit($id)
    {
       $this->db->update('riwayat_minta_darah',array('status'=>$this->input->post('status')),'id_riwayat_minta_darah='.$id);
       $this->session->set_flashdata('pesan', 'Data berhasil diubah');
       redirect('riwayat_minta_darah');  
    }
    public function delete($id)
    {
        $this->db->delete('riwayat_minta_darah',array('id_riwayat_minta_darah'=>$id));
        $this->session->set_flashdata('pesan', 'Data berhasil dihapus');
        redirect('riwayat_minta_darah');   
    }
    public function detail($id)
    {
        return $this->db->get_where("riwayat_minta_darah",array('id_riwayat_minta_darah'=>$id))->row();
    }
}
