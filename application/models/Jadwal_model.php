<?php 

class Jadwal_model extends CI_Model{

	function __construct(){
        parent::__construct();
    }
    
    function list_mahasiswa($nip, $kodemk){
        $this->db->select('*');
        $this->db->from('_v2_jadwal a');
        // name table dibuatkan alias yaitu b kemudian menghubungkan dengan tabel 1 dengan tabel ke dua
        // kemudian jenis joinnya yaitu left
        $this->db->join('_v2_krs20181 b', 'b.IDJadwal=a.IDJadwal', 'left');
        $this->db->join('_v2_mhsw c', 'c.NIM=b.NIM', 'left');  
        $this->db->where('a.IDDosen', $nip);
        $this->db->where('a.Kodemk', $kodemk);
        return $this->db->get()->result_array();
    }

    function list_tugas($nip, $kodemk) {
        // $query = $this->db->query("SELECT * FROM upload_tugas WHERE nip='$nip' AND kodemk='$kodemk'");
        $array = array('nip' => $nip, 'kodemk' => $kodemk);
        $this->db->select('*');
        $this->db->from('upload_tugas');
        $this->db->where($array);
        // $this->db->where('kodemk', $kodemk);
        $query = $this->db->get();  
        return $query->result_array();
    }

    public function cek_status($nim, $kodemk, $nip, $id_upload)
    {
        // $query = $this->db->query("SELECT st.id_status FROM submit_tugas st LEFT JOIN upload_tugas ut ON st.id_upload=ut.id_upload WHERE st.nim='$nim' AND ut.kodemk='$kodemk' AND ut.nip='$nip' LIMIT 1");
        $this->db->select('id_status');
        $this->db->from('submit_tugas a');
        $this->db->join('upload_tugas b', 'b.id_upload = a.id_upload', 'left');
        $this->db->where('a.nim', $nim);
        $this->db->where('a.id_upload', $id_upload);
        $this->db->where('b.kodemk', $kodemk);
        $this->db->where('b.nip', $nip);
        $this->db->limit('1');
        $query = $this->db->get();
        return $query->row();
    }

}