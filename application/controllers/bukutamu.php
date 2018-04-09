<?php
class BukuTamu extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Guest_model');
        $this->load->model('Pengumuman_model');
	}
	
	function index(){
		$dataprofile = array(
			'page_title' => 'Buku Tamu',
			'name' => $this->session->userdata('name'),
			'role' => $this->session->userdata('role'),
            'img_profile' => $this->session->userdata('img_profile'),
            'pengumuman' => $this->Pengumuman_model->getListPengumuman()
		);
		$content = array(
			'content' => 'bukutamu/bukutamuform'			
		);
		$this->template->load('template/def_template',$content,$dataprofile);
	}
	
	function tambahBukuTamu(){
		if(isset($_POST['btnSave'])){
			$dateNow = date('Y-m-d H:i:s');
			$this->Guest_model->setPengiriman($_POST['pengirim']);
			$this->Guest_model->setTanggal($dateNow);
			$this->Guest_model->setPesan($_POST['elm1']);
			$this->Guest_model->setTerbit('1');
			
			$this->Guest_model->insertGuest();
			redirect('bukutamu');
		}
	}
	
	function getBukuTamuList(){
		$dataprofile = array(
			'page_title' => 'Buku Tamu',
			'name' => $this->session->userdata('name'),
			'bukutamu' => $this->Guest_model->getAllGuestList(),
			'role' => $this->session->userdata('role'),
            'img_profile' => $this->session->userdata('img_profile'),
            'pengumuman' => $this->Pengumuman_model->getListPengumuman()
		);
		$content = array(
			'content' => 'bukutamu/list'			
		);
		$this->template->load('template/def_template',$content,$dataprofile);
	}
	
	function getBukuTamuDetail(){
		$id = $this->uri->segment(3);
		$this->Guest_model->setId($id);
		$dataprofile = array(
			'page_title' => 'Buku Tamu',
			'name' => $this->session->userdata('name'),
			'bukutamu' => $this->Guest_model->getGuestOne(),
			'role' => $this->session->userdata('role'),
            'pengumuman' => $this->Pengumuman_model->getListPengumuman(),
            'img_profile' => $this->session->userdata('img_profile')
		);
		$content = array(
			'content' => 'bukutamu/detail'			
		);
		$this->template->load('template/def_template',$content,$dataprofile);
	}
	
	function deleteBukuTamu(){
		$id = $this->uri->segment(3);
		$this->Guest_model->setId($id);
		$this->Guest_model->hapusBukuTamu();
		redirect('bukutamu/getBukuTamuList');
	}
}