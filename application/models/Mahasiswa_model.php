<?php 

class Mahasiswa_model extends CI_Model{
	
	public function __construct() {
		parent::__construct();
	}

	public $tabel = 'submit_tugas';
	
	//fetch all pictures from db
	// function get_all_pics(){
	// 	$all_pics = $this->db->get('pictures');
	// 	return $all_pics->result();
	// }

	function store_pic_data($data){
		return $this->db->insert( $this->tabel, $data);
	}

	function delete($id){
        return $this->db->delete( $this->tabel, array('id_submit'=>$id));
    }
	
}