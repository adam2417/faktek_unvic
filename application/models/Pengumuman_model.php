<?php
class Pengumuman_model extends CI_Model
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
    
    function getListByType() {
        $this->db->select("t_pengumuman.id,t_pengumuman.header_title,t_pengumuman.content,t_param.param_desc,date_format(t_pengumuman.update_time,'%d %M %Y %H:%m') waktu",false)->join('t_param','t_pengumuman.tipe=t_param.param_value')->where(array('t_pengumuman.active'=>'1','t_param.param_typ'=>'INFO_IN_TYP','t_param.active'=>'1','t_param.param_value'=>$this->getTipe()))->order_by('t_pengumuman.update_time','asc');
		$query = $this->db->get('t_pengumuman');
		return $query->result();
    }
    
    function getListPengumuman() {
        $this->db->select("t_pengumuman.id,t_pengumuman.header_title,t_pengumuman.content,t_param.param_desc,date_format(t_pengumuman.update_time,'%d %M %Y %H:%m') waktu,t_pengumuman.tipe",false)->join('t_param','t_pengumuman.tipe=t_param.param_value')->where(array('t_pengumuman.active'=>'1','t_param.param_typ'=>'INFO_IN_TYP','t_param.active'=>'1'))->order_by('t_pengumuman.update_time','desc')->limit(4);
		$query = $this->db->get('t_pengumuman');
		return $query->result();
    }
    
    function updateInfo() {
        $data = array(
			'header_title' => $this->getTitle(),
			'content' => $this->getContent(),
			'update_time' => $this->getUpdateTime(),
            'update_by' => $this->getUpdateBy()
		);		
		$this->db->update('t_pengumuman',$data);
    }
    
    function tambahInfo(){
		$data = array(
			'header_title' => $this->getTitle(),
			'content' => $this->getContent(),
			'update_time' => $this->getUpdateTime(),
			'update_by' => $this->getUpdateBy(),
            'tipe' => $this->getTipe()
		);
		$this->db->insert('t_pengumuman',$data);
	
    }
    
    function getOneInfo(){
        $this->db->select("id,header_title,content,tipe,date_format(update_time,'%d %M %Y %H:%m') update_time,update_by",false)->where(array('id'=>$this->getId()));
        $query = $this->db->get('t_pengumuman');
        return $query->result();
    }
    
    function hapusPengumuman(){
		$data = array(			
			'active' => '0'
		);
		$this->db->where(array('id'=>$this->getId()));
		$this->db->update('t_pengumuman',$data);
	}
}