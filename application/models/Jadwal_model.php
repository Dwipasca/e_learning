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
    function list_mahasiswa($nip, $kodemk){
        $this->db->select('*');
        $this->db->from('_v2_jadwal a');
        $this->db->join('_v2_krs20181 b', 'b.IDJadwal=a.IDJadwal', 'left');
        $this->db->join('_v2_mhsw c', 'c.NIM=b.NIM', 'left');
        $this->db->where('a.IDDosen', $nip);
        $this->db->where('a.Kodemk', $kodemk);
        return $this->db->get()->result_array();
    }

    function list_tugas($nip, $kodemk) {
        $this->db->select('*');
        $this->db->from('upload_tugas');
        $this->db->where('nip', $nip);
        $this->db->where('kodemk', $kodemk);
        $query = $this->db->get(); 
        return $query->result_array();
    }

}