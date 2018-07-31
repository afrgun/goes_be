<?php
    class Tambah_siswa extends CI_Controller {
        public $db2;

        function __Construct(){
            parent::__Construct ();
            $this->db2 = $this->load->database('second', TRUE);
            $this->load->model('TambahSiswaModel'); // load model 
            $this->load->library('session');
        }

        function index(){
            $this->load->helper('url');
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

            //validating kd_siswa
            $this->form_validation->set_rules('kd_siswa', 'Kode siswa', 'required|min_length[6]|max_length[6]');

            //validating nama siswa
            $this->form_validation->set_rules('nm_siswa', 'Nama siswa', 'required');

            //validation tgl lahir
            $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
            
            //validating tgl masuk
            $this->form_validation->set_rules('thn_masuk', 'Tahun Masuk', 'required');

            //validation jenis kelamin
            $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
            
            //validating nama ortu
            $this->form_validation->set_rules('nm_ortu', 'Nama Orang Tua', 'required');

            //validation alamat
            $this->form_validation->set_rules('alamat', 'alamat', 'required');
            
            //validating no telp
            $this->form_validation->set_rules('no_telp', 'Nomer Telp', 'required');

            //validation password
            $this->form_validation->set_rules('pass_siswa', 'Password Siswa', 'required');
            
            if($this->form_validation->run() == FALSE){
                $this->load->view('tambah_siswa');
            } else {
                $data = array(
                    'kd_siswa' => $this->input->post('kd_siswa'),
                    'nm_siswa' => $this->input->post('nm_siswa'),
                    'tgl_lahir' => $this->input->post('tgl_lahir'),
                    'thn_masuk' => $this->input->post('thn_masuk'),
                    'jk' => $this->input->post('jk'),
                    'nm_ortu' => $this->input->post('nm_ortu'),
                    'alamat' => $this->input->post('alamat'),
                    'no_telp' => $this->input->post('no_telp'),
                    'pass_siswa' => $this->input->post('pass_siswa')
                );

                $this->TambahSiswaModel->form_insert($data);

                $this->session->set_flashdata('success_siswa', 'Data Tersimpan');
                $this->load->view('tambah_siswa', $data);
            
            }
        }

    }

?>