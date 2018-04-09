<?php
class User extends CI_Controller{
	
	// Calling a class constructor
	function __construct(){
		parent::__construct();
		$this->load->model('User_model');
        $this->load->model('Pengumuman_model');
	}
	
	function index(){                
		$data = array(
			'page_title'=>'User List',
			'name'=>$this->session->userdata('name'),
			'userlist' => $this->User_model->getListdata(),
			'role' => $this->session->userdata('role'),
            'pengumuman' => $this->Pengumuman_model->getListPengumuman(),
            'img_profile' => $this->session->userdata('img_profile')
		);
		$content = array(
			'content' => 'user/user'			
		);		
		//$this->template->add_js('alert("test");','embed');
		$this->template->load('template/def_template',$content,$data);
	}
	
	function userProfileById(){
		$id = $this->uri->segment(3);
		$this->User_model->setId($id);
		$queryData = array(
			'page_title' => 'Profil User',
			'userloop' => $this->User_model->getProfileById(),
			'name' => $this->session->userdata('name'),
            'pengumuman' => $this->Pengumuman_model->getListPengumuman(),
            'img_profile' => $this->session->userdata('img_profile')
		);
		$content = array(
			'content' => 'user/user_profile'
		);
		$this->template->load('template/def_template',$content,$queryData);
	}

	function userProfile(){
		$this->User_model->setUname($this->session->userdata('username'));
		$queryData = array(
			'page_title' => 'Profil User',
			'userloop' => $this->User_model->getProfileByUname(),
			'name' => $this->session->userdata('name'),
            'pengumuman' => $this->Pengumuman_model->getListPengumuman(),
            'img_profile' => $this->session->userdata('img_profile')
		);
		$content = array(
			'content' => 'user/user_profile'
		);
		$this->template->load('template/def_template',$content,$queryData);
	}
	
	function editProfile(){		
		if(isset($_POST['btnSave'])){
			$username = $_POST['username'];			
			$fullname = $_POST['fname'];
			$role = $_POST['role'];
            $photo = $_FILES['photo']['name'];
            $fname = 'photo';
			
			$id = $this->uri->segment(3);
			if($id){
				$this->User_model->setId($id);
			}
            
            if(isset($photo)) {
                $this->User_model->setPhoto($photo);
            }
			
			$this->User_model->setUname($username);
			$this->User_model->setFullName($fullname);			
			$this->User_model->setRole($role);
						
			$this->User_model->modifyUserName();
			$this->User_model->modifyFullname();
            $this->User_model->modifyRole();
			
			if(isset($_POST['password'])){
				$password = $_POST['password'];
                if(!empty($password)){
				    $this->User_model->setPassword($password);
				    $this->User_model->modifyPassword();
                }
			}
            
            $config = array(
                'allowed_types' => 'jpg|jpeg|gif|png',
                'upload_path' => $this->User_model->getGalleryPath(),
                'max_size' => 2048000,
                'overwrite' => true
            );

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload($fname))
            {
                $status = 'error';
                $msg = $this->upload->display_errors('', '');
            } else {
                $image_data = $this->upload->data();
                $config2 = array(
                    'source_image' => $image_data['full_path'],
                    'new_image' => $this->User_model->getGalleryPath() . '/thumbs',
                    'maintain_ration' => true,
                    'width' => 128,
                    'height' => 128
                );

                $this->load->library('image_lib', $config2);
                $this->image_lib->resize();
                
                $this->User_model->setPhoto($image_data['file_name']);
                $this->User_model->modifyPhoto();
            }
            
            redirect('user');
		}else{
			$id = $this->uri->segment(3);
			if(!$id){
				$this->load->model('Role_model');			
				$this->User_model->setUname($this->session->userdata('username'));		
				$queryData = array(
					'page_title' => 'Edit Profil User',
					'userloop' => $this->User_model->getProfileByUname(),
					'name' => $this->session->userdata('name'),
					'datacombo' => $this->Role_model->getRoleData(),
                    'pengumuman' => $this->Pengumuman_model->getListPengumuman(),
                    'img_profile' => $this->session->userdata('img_profile')
				);
			}else{				
				$this->User_model->setId($id);
				$this->load->model('Role_model');	
				$queryData = array(
					'page_title' => 'Edit Profil User',
					'userloop' => $this->User_model->getProfileById(),
					'name' => $this->session->userdata('name'),
					'datacombo' => $this->Role_model->getRoleData(),
                    'pengumuman' => $this->Pengumuman_model->getListPengumuman(),
                    'img_profile' => $this->session->userdata('img_profile')
				);
			}
			$content = array(
				'content' => 'user/modifyuser'
			);
			$this->template->load('template/def_template',$content,$queryData);
		}
	}
	
	function tambahUser(){		
		if(isset($_POST['btnSave'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$fullname = $_POST['fname'];
			$role = $_POST['role'];
            $photo = $_FILES['photo']['name'];
            $fname = 'photo';
			
			$this->User_model->setUname($username);
			$this->User_model->setPassword($password);
			$this->User_model->setFullName($fullname);
			$this->User_model->setRole($role);
            
            $config = array(
                'allowed_types' => 'jpg|jpeg|gif|png',
                'upload_path' => $this->User_model->getGalleryPath(),
                'max_size' => 2048000,
                'overwrite' => true
            );

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload($fname))
            {
                $status = 'error';
                $msg = $this->upload->display_errors('', '');
            } else {
                $image_data = $this->upload->data();
                $config2 = array(
                    'source_image' => $image_data['full_path'],
                    'new_image' => $this->User_model->getGalleryPath() . '/thumbs',
                    'maintain_ration' => true,
                    'width' => 128,
                    'height' => 128
                );

                $this->load->library('image_lib', $config2);
                $this->image_lib->resize();
                
                $this->User_model->setPhoto($image_data['file_name']);
                $this->User_model->tambahUser();
                redirect('user');
            }			
		}else{
			$this->load->model('Role_model');		
			$queryData = array(
				'page_title' => 'Tambah User',
				'userloop' => $this->User_model->getProfileByUname(),
				'name' => $this->session->userdata('name'),
				'datacombo' => $this->Role_model->getRoleData(),
                'pengumuman' => $this->Pengumuman_model->getListPengumuman(),
                'img_profile' => $this->session->userdata('img_profile')
			);
			$content = array(
				'content' => 'user/add'
			);
			$this->template->load('template/def_template',$content,$queryData);
		}
	}
	
	function deleteUser(){
		$id = $this->uri->segment(3);
		$this->User_model->setId($id);
		$this->User_model->deleteProfile();
		redirect('user');
	}
	
	function logout()
	{		
        $array_currsession = array('userid'=>'','username'=>'','role'=>'','name'=>'','img_profile');
        $this->session->unset_userdata($array_currsession);             
		redirect('home');
	}
    
    private function do_upload(){
        $config = array(
            'allowed_types' => 'jpg|jpeg|gif|png',
            'upload_path' => $this->User_model->getGalleryPath(),
            'max_size' => 2048000,
            'overwrite' => true
        );

        $this->load->library('upload', $config);
        if($this->upload->do_upload())
        {
            $data = array('upload_data' => $this->upload->data());
        }
        /*$image_data = $this->upload->data();
        $config2 = array(
            'source_image' => $image_data['full_path'],
            'new_image' => $this->getGalleryPath() . '/thumbs',
            'maintain_ration' => true,
            'width' => 128,
            'height' => 128
        );

        $this->load->library('image_lib', $config2);
        $this->image_lib->resize();*/	
        var_dump($data);exit;
    }
}