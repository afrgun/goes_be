<?php
    class delete_guru extends CI_Controller{
        function __Construct(){
            parent::__Construct ();
            $this->load->database(); // load database
            $this->load->model('DeleteGuruModel'); // load model 
        }
        
    }
?>