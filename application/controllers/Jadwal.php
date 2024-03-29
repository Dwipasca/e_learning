<?php 


class Jadwal extends CI_Controller {

        public function __construct(){
                parent::__construct();
                // call library SSP for datatable server side
                $this->load->library('SSPCustom');
                //$this->load->library('SSP');
                $this->load->model('jadwal_model');
        }

        function index() {
                $this->load->view('dosen/list_jadwal');
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
                                'db' => 'kodemk',
                                'dt' => 'aksi',
                                'formatter' => function ($d) { // var $d itu untuk ke primary key yaitu stambuk 
                                        return anchor('jadwal/list_tugas/'.$d,'<i class="fa fa-eye"> detail</i>', array('class' => 'btn btn-primary btn-sm'));
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

        function list_tugas($kodemk) {
                $nip= $this->session->userdata('nip');
                $kodemk= $this->uri->segment(3);
                $data['tugas'] = $this->jadwal_model->list_tugas($nip, $kodemk);
                $data['judul'] = $this;
                $this->load->view('dosen/list_tugas', $data);
        }

        function list_tugas_mahasiswa($kodemk) {
                $nip= $this->session->userdata('nip');
                $data['controller'] = $this;
                $data['mahasiswa'] = $this->jadwal_model->list_mahasiswa($nip, $kodemk);
                $this->load->view('dosen/list_tugas_mahasiswa', $data);
        }

        function cek_status($nim, $kodemk, $nip, $id_upload) {
                $status = $this->jadwal_model->cek_status($nim, $kodemk, $nip, $id_upload);
                if ($status) {
                        return '<button type="button" class="btn btn-info btn-xs">Kumpul Tugas</button>';
                } else {
                        return '<button type="button" class="btn btn-danger btn-xs">Belum Kumpul Tugas</button>';
                }   
        }

}