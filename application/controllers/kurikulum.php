<?php
class Kurikulum extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Kurikulum_model');
        $this->load->model('Pengumuman_model');
	}

	function index(){
		$datavisimisi = array(
			'page_title' => 'Kurikulum',
			'name' => $this->session->userdata('name'),
			'data' => $this->Kurikulum_model->getList(),
			'role' => $this->session->userdata('role'),
            'pengumuman' => $this->Pengumuman_model->getListPengumuman(),
            'img_profile' => $this->session->userdata('img_profile')
		);
		$content = array(
			'content' => 'kurikulum/kurikulum'			
		);
		$this->template->load('template/def_template',$content,$datavisimisi);
	}

	function modifyDescription(){
		if(isset($_POST['btnSave'])){
			$this->Kurikulum_model->setDescription($_POST['elm1']);
			$this->Kurikulum_model->setLastEdited(date("Y-m-d H:i:s"));
			$this->Kurikulum_model->setEditedBy($this->session->userdata('name'));
				
			$this->Kurikulum_model->updateProfile();
				
			redirect('kurikulum');
		}else{
			$dataprofile = array(
				'page_title' => 'Edit Kurikulum',
				'name' => $this->session->userdata('name'),
				'data' => $this->Kurikulum_model->getList(),				
				'role' => $this->session->userdata('role'),
                'pengumuman' => $this->Pengumuman_model->getListPengumuman(),
                'img_profile' => $this->session->userdata('img_profile')
			);
			$content = array(
				'content' => 'kurikulum/editkurikulum'			
			);
			$this->template->load('template/def_template',$content,$dataprofile);
		}
	}
}