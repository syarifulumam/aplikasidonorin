<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_artikel');
        //library upload untuk bisa upload gambar di summernote
        // $this->load->library('upload');
    }
    public function index()
    {
        $data['artikel'] = $this->model_artikel->get_data();
        $this->template->load('template_admin','halaman_admin/artikel',$data);
    }
    
    public function add()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
        $this->form_validation->set_rules('konten', 'Konten', 'trim|required');
        $this->form_validation->set_rules('url', 'Url', 'trim|required');

        if ($this->form_validation->run() == true) {
            $this->model_artikel->add_data();
        }
        $this->template->load('template_admin','halaman_admin/add_artikel');
    }
    public function delete($id)
    {
        if (!empty($id)) {
            $this->model_artikel->delete($id);
        }
        redirect('artikel');
    }
    public function edit($id)
    {   
        $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
        $this->form_validation->set_rules('konten', 'Konten', 'trim|required');
        $this->form_validation->set_rules('url', 'Url', 'trim|required');
        
        if ($this->input->post() && $this->form_validation->run() == true) {
            $this->model_artikel->edit_data();
        } else {
            $data['artikel'] = $this->model_artikel->get_data($id);
            $this->template->load('template_admin','halaman_admin/edit_artikel',$data);
        }
    }
    //Upload image summernote
	function upload_image(){
        $this->load->library('upload');
		if(isset($_FILES["image"]["name"])){
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$this->upload->initialize($config);
			if(!$this->upload->do_upload('image')){
				$this->upload->display_errors();
				return FALSE;
			}else{
				$data = $this->upload->data();
		        //Compress Image
		        $config['image_library']='gd2';
		        $config['source_image']='./uploads/'.$data['file_name'];
		        $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= TRUE;
	            $config['quality']= '60%';
	            $config['width']= 800;
	            $config['height']= 800;
	            $config['new_image']= './uploads/'.$data['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();
				echo base_url().'uploads/'.$data['file_name'];
			}
		}
	}
	//Delete image summernote
	function delete_image(){
		$src = $this->input->post('src');
		$file_name = str_replace(base_url(), '', $src);
		if(unlink($file_name)){
	        echo 'File Delete Successfully';
	    }
	}
    
}
