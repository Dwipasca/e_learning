<?php 

class Dosen_model extends CI_Model{

	public $tabel = 'upload_tugas';
	
	//fetch all pictures from db
	// function get_all_pics(){
	// 	$all_pics = $this->db->get('pictures');
	// 	return $all_pics->result();
	// }

	//save picture data to db
	function store_pic_data($data){
		return $this->db->insert( $this->tabel, $data);
	}

	function delete($id){
        return $this->db->delete( $this->tabel, array('id_upload'=>$id));
	}

	function editNilai($nim, $idUpload, $data) {
		$this->db->where('nim', $nim);
		$this->db->where('id_upload', $idUpload);
		return $this->db->update('submit_tugas', $data);
	}	
}