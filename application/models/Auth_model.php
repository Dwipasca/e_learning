<?php


Class Auth_model extends CI_Model {
    

    function __construct(){
        parent::__construct();
    }
    
    function log_user($username, $password, $table) {
        $sql = $this->db->get_where($table, array('login'=>$username))->result();
        
        if (empty($sql)) {
            return false;
        }
        
        $this->db->select('login,name');
        $this->db->from( $table );
        $this->db->where('login', $username);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows()==1){ //jika datanya ada
            return $query->result();
            
        }else {
            return false;
        }
        
    }

    
    // function cheklogin($username,$password){

    //     $sql = $this->db->get_where('akun', array('username'=>$username))->result();
        
    //     if (empty($sql)){
    //         echo "tidak ada";
    //         return false;
    //     }
        
    //     foreach($sql as $s){
    //         $id_rsa = $s->id_rsa;
    //     }

    //     $password = $this->enkripsi->enkrip_pass($password,$id_rsa);
        
    //     $this->db->select('username,password,nama,level'); //pilih kolom yang ada pada tabel akun
    //     $this->db->from('akun');
    //     $this->db->where('username', $username);
    //     $this->db->where('password', $password);
    //     $this->db->limit(1);

    //     $query = $this->db->get();

    //     if ($query->num_rows()==1){ //jika datanya ada
    //         return $query->result();
            
    //     }else {
    //         return false;
    //     }

    // }

}