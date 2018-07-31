<?php
    class Daftar_siswa extends CI_Controller {
        public $db2;

        function __Construct(){
            parent::__Construct ();

            $this->db2 = $this->load->database('second', TRUE);
            //$this->load->database(); // load database
            $this->load->model('DaftarSiswaModel'); // load model 
            $this->load->library('session');
        }    

        public function index(){
            $this->load->helper('url');

            $id = $this->uri->segment(3);
            
            $this->data['siswas'] = $this->DaftarSiswaModel->getSiswa(); // calling Post model method getPosts()
            $this->load->view('daftar_siswa', $this->data); // load the view file , we are passing $data array to view file 
        }

        public function delete(){
            //delete
            $id = $this->uri->segment(3);
            $this->DaftarSiswaModel->deleteSiswa($id);
            //$this->deletePosts();
            
            $this->session->set_flashdata('delete_siswa', "Data terhapus"); 
            $this->index();
        }


    }
?>