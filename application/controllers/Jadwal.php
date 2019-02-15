<?php 


class Jadwal extends CI_Controller {

    public function __construct(){
        parent::__construct();
        // call library SSP for datatable server side
        $this->load->library('datatables');
        $this->load->model('Dosen_model');
    }

    function index() {
        $this->load->view('jadwal/list_jadwal');
    }

    function json(){
        
        // $this->datatables->select('id,kodemk,namamk,sks,tahun,jammulai,jamselesai,hari');
        $this->datatables->select('id,kodemk');
        $this->datatables->from('_v2_jadwal');
        $this->datatables->where(array('iddosen' => '196902212000121001'));
        return print_r($this->datatables->generate());
        
    }


}