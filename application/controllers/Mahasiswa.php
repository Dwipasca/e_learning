<?php

class Mahasiswa extends CI_Controller {

        public function __construct(){
                parent::__construct();
                // call library SSP for datatable server side
                $this->load->library('SSPCustom');
                // $this->load->model('Dosen_model');
        }

        function index(){
            $this->load->view('mahasiswa/dashboard_mahasiswa');
        }

}