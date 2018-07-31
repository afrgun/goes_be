<?php
    class Edit_siswa extends CI_Controller {
        public $db2;

        function __Construct(){
            parent::__Construct ();
            $this->db2 = $this->load->database('second', TRUE);
            $this->load->model('EditSiswaModel'); // load model 
            $this->load->library('session');
        }

        public function index() {
            $this->load->helper('url');
            
            $id = $this->uri->segment(3);
            $this->data['siswas'] = $this->EditSiswaModel->getSiswa(); // calling Post model method getPosts()
            $this->data['singleSiswa'] = $this->EditSiswaModel->getSiswaId($id); // calling Post model method getPosts()
            
            //view
            $this->load->view('edit_siswa', $this->data); // load the view file , we are passing $data array to view file
        }

        public function update(){
            $id = $this->input->post('kd_siswa');
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
            $this->form_validation->set_rules('kd_siswa', 'Kode siswa', 'required|min_length[6]|max_length[6]');
            $this->form_validation->set_rules('nm_siswa', 'Nama siswa', 'required');
            $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
            $this->form_validation->set_rules('thn_masuk', 'Tahun Masuk', 'required');
            $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
            $this->form_validation->set_rules('nm_ortu', 'Nama Orang Tua', 'required');
            $this->form_validation->set_rules('alamat', 'alamat', 'required');
            $this->form_validation->set_rules('no_telp', 'Nomer Telp', 'required');
            $this->form_validation->set_rules('pass_siswa', 'Password Siswa', 'required');
    
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
    
            $this->EditSiswaModel->updateSiswa($id, $data);
            
            $this->index();
    
            if($this->form_validation->run() == FALSE){
                return false;
            } else{
                redirect('daftar_siswa', 'refresh');
                $this->load->view('daftar_siswa');
                return true;
            }
            
        }

    }
?>