<?php 

class Jadwal_model extends CI_Model{

	function __construct(){
        parent::__construct();
    }
    
    /**
     * a dan b digunakan sebagai alias
     * from yaitu dari tabel apa dojoin ke tabel apa
     * where column yg sama antara kedua tabel tersebut
     * orderby untuk mengurutkan data asc = dari kecil ke besar
     */
    function list_mahasiswa($idjadwal){
        
        $this->db->select('*');
		$this->db->from('_v2_krs20181 a'); 
		$this->db->join('_v2_mhsw b', 'b.NIM=a.NIM', 'left');
		$this->db->where('a.IDJADWAL',$idjadwal);
		$this->db->order_by('b.NIM','asc');         
		$query = $this->db->get();
    	return $query->result_array();

        //return $this->db->get_where($table, array('idjadwal' => $idjadwal))->result_array();
    }

}