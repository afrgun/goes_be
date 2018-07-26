<?php
    class Tambah extends CI_Controller {

        function __Construct(){
            parent::__Construct ();
            $this->load->database(); // load database
            $this->load->model('TambahDataModel'); // load model 
            $this->load->library('session');
        }

        function index(){
            $this->load->helper('url');
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

            //validating kd_guru
            $this->form_validation->set_rules('kd_guru', 'Kode guru', 'required|min_length[8]|max_length[8]');
            
            //validating nama guru
            $this->form_validation->set_rules('nm_guru', 'Nama guru', 'required');

            //validation tgl lahir
            $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
            
            //validating status
            $this->form_validation->set_rules('status', 'Status', 'required');

            //validating jk
            $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');

            //validating pendidikan
            $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required');
            
            //validating password
            $this->form_validation->set_rules('pass_guru', 'Password Guru', 'required');

            if($this->form_validation->run() == FALSE){
                $this->load->view('tambah_data');
            } else{
                $data = array(
                    'kd_guru' => $this->input->post('kd_guru'),
                    'nm_guru' => $this->input->post('nm_guru'),
                    'tgl_lahir' => $this->input->post('tgl_lahir'),
                    'status' => $this->input->post('status'),
                    'jk' => $this->input->post('jk'),
                    'pendidikan' => $this->input->post('pendidikan'),
                    'pass_guru' => $this->input->post('pass_guru')
                );
                $this->TambahDataModel->form_insert($data);
                
                $this->session->set_flashdata('success', "Data tersimpan"); 

                $this->load->view('tambah_data', $data);
            }

        }
    }
?>