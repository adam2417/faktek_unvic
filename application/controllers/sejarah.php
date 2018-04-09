<?php
class Sejarah extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Sejarah_model');
        $this->load->model('Pengumuman_model');
	}

	function index(){
		$dataprofile = array(
			'page_title' => 'Sejarah Fakultas',
			'name' => $this->session->userdata('name'),
			'datasejarah' => $this->Sejarah_model->getSejarah(),
			'role' => $this->session->userdata('role'),
            'pengumuman' => $this->Pengumuman_model->getListPengumuman(),
            'img_profile' => $this->session->userdata('img_profile')
		);
		$content = array(
			'content' => 'sejarah/sejarahgereja'			
		);
		$this->template->load('template/def_template',$content,$dataprofile);		
	}
	
	function modifyDescription(){		
		if(isset($_POST['btnSave'])){
			$dateNow = date('Y-m-d H:i:s');			
			$this->Sejarah_model->setDescription($_POST['elm1']);
			$this->Sejarah_model->setLastEdited($dateNow);
			$this->Sejarah_model->setEditedBy($this->session->userdata('name'));
			
			$this->Sejarah_model->updateSejarah();
			
			redirect('sejarah');
		}else{
			$dataprofile = array(
				'page_title' => 'Edit Sejarah Fakultas',
				'name' => $this->session->userdata('name'),
				'datasejarah' => $this->Sejarah_model->getSejarah(),
				'role' => $this->session->userdata('role'),
                'pengumuman' => $this->Pengumuman_model->getListPengumuman(),
                'img_profile' => $this->session->userdata('img_profile')
			);
			$content = array(
				'content' => 'sejarah/editsejarah'			
			);
			$this->template->load('template/def_template',$content,$dataprofile);
		}
	}	
}