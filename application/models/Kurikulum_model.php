<?php
class Kurikulum_model extends CI_Model {
	private $description;
	private $last_edited;
	private $image;
	private $edited_by;
	private $gallery_path_url;
	
	function setDescription($description){
		$this->description = $description;
	}
	
	function getDescription(){
		return $this->description;
	}
	
	function setLastEdited($lastedited){
		$this->last_edited = $lastedited;
	}
	
	function getLastEdited(){
		return $this->last_edited;
	}
	
	function setEditedBy($editedBy){
		$this->edited_by = $editedBy;
	}
	
	function getEditedBy(){
		return $this->edited_by;
	}
    
	function __construct(){
		parent::__construct();
	}
	
	function getList(){
		$this->db->select("description,date_format(last_edited,'%d %M %Y %H:%i') last_edited,edited_by",false);
		$query = $this->db->get('t_kurikulum');
		return $query->result();
	}
	
	function updateProfile(){
		$data = array(
			'description' => $this->getDescription(),
			'last_edited' => $this->getLastEdited(),
			'edited_by' => $this->getEditedBy()
		);		
		$this->db->update('t_kurikulum',$data);
	}	
}