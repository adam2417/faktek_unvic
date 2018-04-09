<?php
class Visimisi extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Visimisi_model');
        $this->load->model('Pengumuman_model');
	}

	function index(){
		$datavisimisi = array(
			'page_title' => 'Visi Dan Misi',
			'name' => $this->session->userdata('name'),
			'datavisimisi' => $this->Visimisi_model->getVisiMisi(),
			'role' => $this->session->userdata('role'),
            'pengumuman' => $this->Pengumuman_model->getListPengumuman(),
            'img_profile' => $this->session->userdata('img_profile')
		);
		$content = array(
			'content' => 'visimisi/visimisi'			
			);
			$this->template->load('template/def_template',$content,$datavisimisi);
	}

	function modifyDescription(){
		if(isset($_POST['btnSave'])){
			$this->Visimisi_model->setDescription($_POST['elm1']);
			$this->Visimisi_model->setLastEdited(date("Y-m-d H:i:s"));
			$this->Visimisi_model->setEditedBy($this->session->userdata('name'));
				
			$this->Visimisi_model->updateProfile();
				
			redirect('visimisi');
		}else{
			$dataprofile = array(
				'page_title' => 'Edit Visi dan Misi',
				'name' => $this->session->userdata('name'),
				'datavisimisi' => $this->Visimisi_model->getVisiMisi(),
				'role' => $this->session->userdata('role'),
                'pengumuman' => $this->Pengumuman_model->getListPengumuman(),
                'img_profile' => $this->session->userdata('img_profile')
			);
			$content = array(
				'content' => 'visimisi/editvisimisi'			
			);
			$this->template->load('template/def_template',$content,$dataprofile);
		}
	}
}