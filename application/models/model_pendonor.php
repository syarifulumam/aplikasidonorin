<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_pendonor extends CI_Model
{
    public function list()
    {
        return $this->db->query("SELECT users.nama, users.golongan_darah, users.rhesus, riwayat_pendonor.id_riwayat_donor, riwayat_pendonor.nama_tempat, riwayat_pendonor.tanggal_donor, riwayat_pendonor.status FROM users INNER JOIN riwayat_pendonor ON users.id_users = riwayat_pendonor.id_user ORDER BY riwayat_pendonor.id_riwayat_donor DESC")->result();
    }
    public function edit($id)
    {
       $this->db->update('riwayat_pendonor',array('status'=>$this->input->post('status')),'id_riwayat_donor='.$id);
       $this->session->set_flashdata('pesan', 'Data berhasil diubah');
       redirect('pendonor');  
    }
    public function delete($id)
    {
        $this->db->delete('riwayat_pendonor',array('id_riwayat_donor'=>$id));
        $this->session->set_flashdata('pesan', 'Data berhasil dihapus');
        redirect('pendonor');   
    }
}
