<?php
class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
        $this->load->model('Pengumuman_model');
        $this->load->model('Gallery_model');
	}
	function index(){        
		$dataprofile = array(
			'page_title' => 'Home',
			'name' => $this->session->userdata('name'),
            'pengumuman' => $this->Pengumuman_model->getListPengumuman(),
            'img_profile' => $this->session->userdata('img_profile'),
            'galleries' => $this->Gallery_model->getImagesName()
		);
		
		$content = array(
			'content' => 'home/home'			
		);
		$this->template->load('template/def_template',$content,$dataprofile);
	}
}