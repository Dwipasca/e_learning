<?php 


class Jadwal extends CI_Controller {

    public function __construct(){
        parent::__construct();
        // call library SSP for datatable server side
        $this->load->library('SSPCustom');
        $this->load->model('Dosen_model');
    }

    function index() {
        $this->load->view('jadwal/list_jadwal');
    }

    function data(){
		
        //nama tabel
        $table = '_v2_jadwal';
        //primary keynya
        $primaryKey = 'id';
        //list field yg akan ditampilkan
        $columns = array(
                array('db' => 'id', 'dt' => 'id'),
                array('db' => 'kodemk', 'dt' => 'kodemk'),
                array('db' => 'namamk', 'dt' => 'namamk'),
                array('db' => 'sks', 'dt' => 'sks'),
                array('db' => 'tahun', 'dt' => 'tahun'),
                array('db' => 'jammulai', 'dt' => 'jammulai'),
                array('db' => 'jamselesai', 'dt' => 'jamselesai'),
                array('db' => 'hari', 'dt' => 'hari'),
                array(
                        'db' => 'id',
                        'dt' => 'aksi',
                        'formatter' => function ($d) { // var $d itu untuk ke primary key yaitu stambuk 
                                return anchor('jadwal/delete/'.$d,'<i class="fa fa-eye"> detail</i>', array('class' => 'btn btn-primary btn-sm', 'onclick' => 'return test()' ));
                        },
                )
        );

        // SQL server connection information
        $sql_details = array(
                'user' => $this->db->username,
                'pass' => $this->db->password,
                'db' => $this->db->database,
                'host' => $this->db->hostname
        );
        
        // echo json_encode(
        //         SSP::simple($_POST, $sql_details, $table, $primaryKey, $columns, $where)
        // );
        
        $nip = $this->session->userdata('nip');

        echo json_encode(
                SSPCustom::simpleCustom( $_GET, $sql_details, $table, $primaryKey, $columns, "iddosen = $nip " )
            );
}
    


}