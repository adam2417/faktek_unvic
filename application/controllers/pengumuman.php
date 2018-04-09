<?php
class Pengumuman extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('Pengumuman_model');
    }
    
    function index(){
        $tipe = $this->uri->segment(3);
        $this->Pengumuman_model->setTipe($tipe);
        if($tipe == '1'){
            $data = array(
                'page_title' => 'Pengumuman',
                'name' => $this->session->userdata('name'),
                'data' => $this->Pengumuman_model->getListByType(),
                'tipe' => '1',
                'role' => $this->session->userdata('role'),
                'pengumuman' => $this->Pengumuman_model->getListPengumuman(),
                'img_profile' => $this->session->userdata('img_profile')
            );            
        } else if($tipe == '2'){
            $data = array(
                'page_title' => 'Pengumuman',
                'name' => $this->session->userdata('name'),
                'data' => $this->Pengumuman_model->getListByType(),
                'tipe' => '2',
                'role' => $this->session->userdata('role'),
                'pengumuman' => $this->Pengumuman_model->getListPengumuman(),
                'img_profile' => $this->session->userdata('img_profile')
            );
        } else if($tipe == '3'){
            $data = array(
                'page_title' => 'Pengumuman',
                'name' => $this->session->userdata('name'),
                'data' => $this->Pengumuman_model->getListByType(),
                'tipe' => '3',
                'role' => $this->session->userdata('role'),
                'pengumuman' => $this->Pengumuman_model->getListPengumuman(),
                'img_profile' => $this->session->userdata('img_profile')
            );
        }
        
        $content = array(
            'content' => 'pengumuman/index'			
        );
        $this->template->load('template/def_template',$content,$data);
    }
    
    function tambah() {
        $tipe = $this->uri->segment(3);
        $this->Pengumuman_model->setTipe($tipe);
        if(isset($_POST['btnSave'])){            
            $dateNow = date('Y-m-d H:i:s');
            
            $judul = $_POST['title'];
            $content = $_POST['elm1'];
            $modified_by = $this->session->userdata('name');
            
            $this->Pengumuman_model->setTitle($judul);
            $this->Pengumuman_model->setContent($content);
            $this->Pengumuman_model->setUpdateTime($dateNow);
            $this->Pengumuman_model->setUpdateBy($modified_by);
            
            $this->Pengumuman_model->tambahInfo();
            
            redirect('pengumuman/index/'.$tipe);
        }else {
            if($tipe == '1'){
                $data = array(
                    'page_title' => 'Pengumuman',
                    'name' => $this->session->userdata('name'),
                    'tipe' => '1',
                    'role' => $this->session->userdata('role'),
                    'message'=>'',
                    'pengumuman' => $this->Pengumuman_model->getListPengumuman(),
                    'img_profile' => $this->session->userdata('img_profile')
                );            
            } else if($tipe == '2'){
                $data = array(
                    'page_title' => 'Pengumuman',
                    'name' => $this->session->userdata('name'),
                    'tipe' => '2',
                    'role' => $this->session->userdata('role'),
                    'message'=>'',
                    'pengumuman' => $this->Pengumuman_model->getListPengumuman(),
                    'img_profile' => $this->session->userdata('img_profile')
                );
            } else if($tipe == '3'){
                $data = array(
                    'page_title' => 'Pengumuman',
                    'name' => $this->session->userdata('name'),
                    'tipe' => '3',
                    'role' => $this->session->userdata('role'),
                    'message'=>'',
                    'pengumuman' => $this->Pengumuman_model->getListPengumuman(),
                    'img_profile' => $this->session->userdata('img_profile')
                );
            }
            
            $content = array(
                'content' => 'pengumuman/tambah'			
            );
            
            $this->template->load('template/def_template',$content,$data);
        }        
    }
    
    function detail(){
        $tipe = $this->uri->segment(3);
        $idpengumuman = $this->uri->segment(4);
        
        $this->Pengumuman_model->setTipe($tipe);
        $this->Pengumuman_model->setId($idpengumuman);
        $data = array(
            'page_title' => 'Pengumuman',
            'name' => $this->session->userdata('name'),
            'data' => $this->Pengumuman_model->getOneInfo(),
            'role' => $this->session->userdata('role'),
            'pengumuman' => $this->Pengumuman_model->getListPengumuman(),
            'img_profile' => $this->session->userdata('img_profile')
        );
        $content = array(
            'content' => 'pengumuman/detail'			
        );
        $this->template->load('template/def_template',$content,$data);
    }
    
    function hapus() {
        $tipePengumuman = $this->uri->segment(3);
        $idPengumuman = $this->uri->segment(4);
        $this->Pengumuman_model->setId($idPengumuman);
        $this->Pengumuman_model->hapusPengumuman();
        redirect('pengumuman/index/'.$tipePengumuman);
    }
}