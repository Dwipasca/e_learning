<?php

class Dosen extends CI_Controller {

        public function __construct(){
                parent::__construct();
                // call library SSP for datatable server side
                $this->load->library('SSPCustom');
                $this->load->model('Dosen_model');
        }

        function data(){
		
                //nama tabel
                $table = 'upload_file';
                //primary keynya
                $primaryKey = 'id';
                //list field yg akan ditampilkan
                $columns = array(
                        array('db' => 'id', 'dt' => 'id'),
                        array('db' => 'matakuliah', 'dt' => 'matakuliah'),
                        array('db' => 'title_file', 'dt' => 'title_file'),
                        array('db' => 'jam', 'dt' => 'jam'),
                        array('db' => 'tanggal', 'dt' => 'tanggal'),
                        array(
                                'db' => 'path', 
                                'dt' => 'path',
                                'formatter' => function ($d) {
                                        return anchor('assets/uploads/'.$d,'download', array('class' => 'btn btn-primary btn-xs'));
                                     
                                }
                        ),
                        array('db' => 'keterangan', 'dt' => 'keterangan'),
                        array('db' => 'tgl_upload', 'dt' => 'tgl_upload'),
                        array(
                                'db' => 'id',
                                'dt' => 'aksi',
                                'formatter' => function ($d) { // var $d itu untuk ke primary key yaitu stambuk 
                                        return anchor('dosen/edit/'.$d,'<i class="fa fa-edit"></i>','class="btn btn-primary btn-xs"').'  '.
                                        anchor('dosen/delete/'.$d,'<i class="fa fa-trash"></i>', array('class' => 'btn btn-danger btn-xs', 'onclick' => 'return test()'));
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

                echo json_encode(
                        SSPCustom::simpleCustom( $_GET, $sql_details, $table, $primaryKey, $columns, "matakuliah ='SKRIPSI'" )
                    );
        }

        public function index(){
                $this->load->view('list_mahasiswa/list');       
        }

        public function add(){

                $this->form_validation->set_rules('title','Title','required');
                $this->form_validation->set_rules('matakuliah','Matakuliah','required');
                $this->form_validation->set_rules('jam','Jam','required');
                $this->form_validation->set_rules('tanggal','Tanggal','required');
                // $this->form_validation->set_rules('upload_file','Upload File','required');
                $this->form_validation->set_rules('keterangan','Keterangan','required');

                if ($this->form_validation->run() === FALSE) {
			$this->load->view('tugas/upload_file');
			
		}else {
                        $data = array();
			$data['matakuliah'] = $this->input->post('matakuliah'); 
			$data['title_file'] = $this->input->post('title'); 
			$data['jam'] = $this->input->post('jam'); 
                        $data['tanggal'] = $this->input->post('tanggal'); 
                        $data['keterangan'] = $this->input->post('keterangan'); 
                        

                        //file upload code 
			//set file upload settings 
			$config['upload_path']          = APPPATH. '../assets/uploads/';
			$config['allowed_types']        = 'docx|pdf|jpg|png';
                        $config['max_size']             = '2500';
                        

                        $this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('upload_file')){
				// $error = array('error' => $this->upload->display_errors());
                                // $this->load->view('tugas/upload_file', $error);
                                // echo'error upload file';
                                $this->session->set_flashdata('danger','file gagal di upload karena terlalu besar maksimal file <b>2 MB</b>');
                                redirect('dosen/add');
			}else{

				//file is uploaded successfully
				//now get the file uploaded data 
				$upload_data = $this->upload->data();

				//get the uploaded file name
				$data['path'] = $upload_data['file_name'];

				//store pic data to the db
                                $this->Dosen_model->store_pic_data($data);
                                
                                $this->session->set_flashdata('success','Tugas Telah Berhasil Ditambahkan');
				redirect('/');
			}

			
                }


                
        }

        public function delete($id){
		$this->Dosen_model->delete($id);
		$this->session->set_flashdata('success','Data <b>'.$id.'</b> Berhasil Dihapus');
		redirect('/');
	}



}