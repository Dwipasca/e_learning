<?php 


class Jadwal extends CI_Controller {

        public function __construct(){
                parent::__construct();
                // call library SSP for datatable server side
                $this->load->library('SSPCustom');
                //$this->load->library('SSP');
                $this->load->model('Jadwal_model');
        }

        function index() {
                $this->load->view('jadwal/list_jadwal');
        }

        function data_jadwal(){
		
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
                        array('db' => 'koderuang', 'dt' => 'koderuang'),
                        array('db' => 'idjadwal', 'dt' => 'idjadwal'),
                        array(
                                'db' => 'idjadwal',
                                'dt' => 'aksi',
                                'formatter' => function ($d) { // var $d itu untuk ke primary key yaitu stambuk 
                                        return anchor('jadwal/detail/'.$d,'<i class="fa fa-eye"> detail</i>', array('class' => 'btn btn-primary btn-sm'));
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
    

        function detail($idjadwal) {

                $idjadwal = $this->uri->segment('3');

                //$data['mahasiswa'] = $this->Jadwal_model->list_mahasiswa('_v2_krs20181', $idjadwal);
                
                $data['mahasiswa'] = $this->Jadwal_model->list_mahasiswa($idjadwal);
                
                

                $this->load->view('mahasiswa/list_mahasiswa', $data);
        
        }

        


}