<?php
    class Daftar_murid extends CI_Controller {
        function __Construct(){
            parent::__Construct ();
            $this->load->database(); // load database
            //$this->load->model('DaftarMuridModel'); // load model 
        }    

        public function index(){
            $this->load->view('daftar_murid'); // load the view file , we are passing $data array to view file        
        }
    }
?>