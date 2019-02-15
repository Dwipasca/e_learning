<?php 

class Auth extends CI_Controller {

    public function __construct(){
            parent::__construct();
            // call library SSP for datatable server side
            $this->load->model('Auth_model');
    }

    function index(){
        $this->load->view('auth');
    }

    function chek_login(){
        
        if (isset($_POST['submit'])){
            //proses login
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $result   = $this->Auth_model->log_user($username, $password, '_v2_dosen');
            $result2  = $this->Auth_model->log_user($username, $password, '_v2_mhsw');
            
            if (!empty($result)) {
                // echo "sukses login";
                foreach($result as $row);

        		$this->session->set_userdata('nip', $row->login);
                $this->session->set_userdata('nama', $row->name);
                
                redirect('jadwal');
                    // echo "berhasil login";

            }
            else if (!empty($result2)) {
                foreach($result2 as $row);

        		$this->session->set_userdata('nip', $row->login);
                $this->session->set_userdata('nama', $row->name);
                
                echo 'mahasiswa '.$this->session->userdata('nama');
            }
            else{
                //$this->session->set_flashdata('message', '<div class="alert alert-warning"> Username/Password/Kunci salah</div>');
                // $this->session->set_flashdata('danger','Username atau password yang dimasukkan salah');
                // redirect('auth');
                
                echo "akun tidak terdaftar";
            }
            
        }else {
            
            //jika gagal kenapa
            //redirect('auth');
            echo "Akun tidak ada";
        }

        
    }

}