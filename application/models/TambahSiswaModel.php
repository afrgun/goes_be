<?php
    class TambahSiswaModel extends CI_Model {
        function __construct(){
            parent::__construct();
        }

        function form_insert($data){
            $this->db2->insert('data_siswa', $data);
        }
    }
?>