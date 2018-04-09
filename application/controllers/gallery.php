<?php
class Gallery extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Gallery_model');
        $this->load->model('Pengumuman_model');
	}
	function index() {
		if ($this->input->post('upload')) {
            $this->Gallery_model->setGambar($_FILES['userfile']['name']);
            $this->Gallery_model->setJudul($_POST['judul']);

            $this->Gallery_model->postToDatabase();
                        
			$this->Gallery_model->do_upload();
			$dataprofile = array(
				'page_title' => 'Gallery',
				'name' => $this->session->userdata('name'),
				'images' => $this->Gallery_model->get_images(),
				'role' => $this->session->userdata('role'),
                'pengumuman' => $this->Pengumuman_model->getListPengumuman(),
                'img_profile' => $this->session->userdata('img_profile')
			);
		}else{
			$dataprofile = array(
				'page_title' => 'Gallery',
				'name' => $this->session->userdata('name'),
				'images' => $this->Gallery_model->get_images(),
				'role' => $this->session->userdata('role'),
                'pengumuman' => $this->Pengumuman_model->getListPengumuman(),
                'img_profile' => $this->session->userdata('img_profile')
			);
		}
		$content = array(
			'content' => 'gallery/gallery'			
		);
		$this->template->load('template/def_template',$content,$dataprofile);		
	}
	
}
