<?php 

class Auth extends CI_Controller {

    public function __construct(){
            parent::__construct();
            $this->load->model('Auth_model');
    }

    function index(){
        $this->load->view('auth');
    }
    //mengecek smua username dan password yang dimasukkan apakah terdaftar didalam database atau tidak
    function chek_login(){
        
        if (isset($_POST['submit'])){
            //proses login
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $result   = $this->Auth_model->log_user($username, $password, '_v2_dosen');
            $result2  = $this->Auth_model->log_user($username, $password, '_v2_mhsw');
            
            if (!empty($result)) {
                // dosen yang login
                foreach($result as $row);
        		$this->session->set_userdata('nip', $row->login);
                $this->session->set_userdata('nama', $row->name);
                redirect('jadwal');
            }
            else if (!empty($result2)) {
                //mahasiswa yang login
                foreach($result2 as $row);
        		$this->session->set_userdata('nim', $row->login);
                $this->session->set_userdata('nama', $row->name);
                redirect('mahasiswa');
            }
            else{
                echo "akun tidak terdaftar";
            }
        }else {
            //jika gagal kenapa
            //redirect('auth');
            echo "Akun tidak ada";
        }   
    }
}