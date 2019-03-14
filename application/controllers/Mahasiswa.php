<?php

class Mahasiswa extends CI_Controller {

        public function __construct(){
                parent::__construct();
                // call library SSP for datatable server side
                $this->load->library('SSPCustom');
                $this->load->model('mahasiswa_model');
        }

        // tampilan mahasiswa setelah login
        function index(){
            $this->load->view('mahasiswa/dashboard_mahasiswa');
        }

        //daftar tugas mahasiswa sesuai matakuliah
        function list_tugas_mahasiswa () {
                $this->load->view('mahasiswa/listtugas_mahasiswa');
        }

        function submitTugas(){
                
                        $mk = $this->uri->segment('3');
                        $data = array();
                        $data['nim'] = $this->session->userdata('nim');
			
			$data['id_upload'] = $this->input->post('id_upload'); 
			$data['id_status'] = 1; 
                        //file upload code 
			//set file upload settings 
			$config['upload_path']          = APPPATH. '../assets/submits/';
			$config['allowed_types']        = 'docx|pdf|jpg|png';
                        $config['max_size']             = '2500';
                        $this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('upload_file')){
                                $this->session->set_flashdata('danger','file gagal di upload karena terlalu besar maksimal file <b>2 MB</b>');
                                redirect('mahasiswa/list_tugas_mahasiswa/'+$mk);
			}else{
				//file is uploaded successfully
				//now get the file uploaded data
				$upload_data = $this->upload->data();
				//get the uploaded file name
				$data['path'] = $upload_data['file_name'];
				//store pic data to the db
                                $this->mahasiswa_model->store_pic_data($data);
                                $this->session->set_flashdata('success','Tugas Telah Berhasil Ditambahkan');
				redirect('mahasiswa');
			}
                
        }

}