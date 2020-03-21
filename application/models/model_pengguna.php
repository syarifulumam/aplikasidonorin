<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_pengguna extends CI_Model
{
    public function list()
    {
        return $this->db->query("SELECT * FROM users ORDER BY id_users DESC")->result();
    }
    public function detail($id)
    {
        return $this->db->get_where('users',array('id_users'=>$id))->row();
    }
    public function edit($id)
    {
       $this->db->update('users',array('status'=>$this->input->post('status')),'id_users='.$id);
       $this->session->set_flashdata('pesan', 'Data berhasil diubah');
       redirect('pengguna');  
    }
    public function delete($id)
    {
        $this->db->delete('users',array('id_users'=>$id));
        $this->session->set_flashdata('pesan', 'Data berhasil dihapus');
        redirect('pengguna');   
    }
}
