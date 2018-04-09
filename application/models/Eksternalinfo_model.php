<?php
class Eksternalinfo_model extends CI_Model
{
    private $pid;
    private $title;
    private $content;
    private $tipe;
    private $update_by;
    private $update_time;
    
    function getId(){
        return $this->pid;
    }
    
    function setId($id){
        $this->pid = $id;
    }
    
    function getTitle(){
        return $this->title;
    }
    
    function setTitle($titulo){
        $this->title = $titulo;
    }
    
    function getContent(){
        return $this->content;
    }
    
    function setContent($contento){
        $this->content = $contento;
    }
    
    function getTipe(){
        return $this->tipe;
    }
    
    function setTipe($typo){
        $this->tipe = $typo;
    }
    
    function getUpdateBy(){
        return $this->update_by;
    }
    
    function setUpdateBy($ub){
        $this->update_by = $ub;
    }
    
    function setUpdateTime($timo){
        $this->update_time = $timo;
    }
    
    function getUpdateTime(){
        return $this->update_time;
    }
    
    function __construct(){
        parent::__construct();
    }
    
    function getList() {
        $this->db->select("id,header_title,content,date_format(update_time,'%d %M %Y %H:%m') waktu",false)->where(array('active'=>'1'))->order_by('update_time','asc');
		$query = $this->db->get('t_eksternal_info');
		return $query->result();
    }
    
    function updateInfo() {
        $data = array(
			'header_title' => $this->getTitle(),
			'content' => $this->getContent(),
			'update_time' => $this->getUpdateTime(),
            'update_by' => $this->getUpdateBy()
		);		
		$this->db->update('t_eksternal_info',$data);
    }
    
    function tambahInfo(){
		$data = array(
			'header_title' => $this->getTitle(),
			'content' => $this->getContent(),
			'update_time' => $this->getUpdateTime(),
			'update_by' => $this->getUpdateBy(),
            'tipe' => $this->getTipe()
		);
		$this->db->insert('t_eksternal_info',$data);
	
    }
    
    function getOneInfo(){
        $this->db->select("id,header_title,content,date_format(update_time,'%d %M %Y %H:%m') update_time,tipe,update_by",false)->where(array('id'=>$this->getId()));
        $query = $this->db->get('t_eksternal_info');
        return $query->result();
    }
}