<?php
class Eksternalinfo extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('Eksternalinfo_model');
        $this->load->model('Pengumuman_model');
    }
    
    function index(){        
        $data = array(
            'page_title' => 'Eksternal Info',
            'name' => $this->session->userdata('name'),
            'data' => $this->Eksternalinfo_model->getList(),
            'tipe' => '1',
            'role' => $this->session->userdata('role'),
            'pengumuman' => $this->Pengumuman_model->getListPengumuman(),
            'img_profile' => $this->session->userdata('img_profile')
        );            
               
        $content = array(
            'content' => 'eksternal_info/index'			
        );
        $this->template->load('template/def_template',$content,$data);
    }
    
    function tambah() {
        $tipe = $this->uri->segment(3);
        $this->Eksternalinfo_model->setTipe($tipe);
        if(isset($_POST['btnSave'])){            
            $dateNow = date('Y-m-d H:i:s');
            
            $judul = $_POST['title'];
            $content = $_POST['elm1'];
            $modified_by = $this->session->userdata('name');
            
            $this->Eksternalinfo_model->setTitle($judul);
            $this->Eksternalinfo_model->setContent($content);
            $this->Eksternalinfo_model->setUpdateTime($dateNow);
            $this->Eksternalinfo_model->setUpdateBy($modified_by);
            
            $this->Eksternalinfo_model->tambahInfo();
            
            redirect('eksternalinfo/index');
        }else {            
            $data = array(
                'page_title' => 'Eksternal Info',
                'name' => $this->session->userdata('name'),
                'tipe' => '1',
                'role' => $this->session->userdata('role'),
                'message'=>'',
                'pengumuman' => $this->Pengumuman_model->getListPengumuman(),
                'img_profile' => $this->session->userdata('img_profile')
            );  
            $content = array(
                'content' => 'eksternal_info/tambah'			
            );
            
            $this->template->load('template/def_template',$content,$data);
        }        
    }
    
    function detail(){
        $id = $this->uri->segment(3);
        $this->Eksternalinfo_model->setId($id);
        
        $data = array(
            'page_title' => 'Eksternal Info',
            'name' => $this->session->userdata('name'),
            'data' => $this->Eksternalinfo_model->getOneInfo(),
            'role' => $this->session->userdata('role'),
            'pengumuman' => $this->Pengumuman_model->getListPengumuman(),
            'img_profile' => $this->session->userdata('img_profile')
        );
        $content = array(
            'content' => 'eksternal_info/detail'			
        );
        $this->template->load('template/def_template',$content,$data);
    }
}