<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class M_api extends CI_Model {
 
        public function getGuru(){
            $this->db->from('Guru');
            $query = $this->db->get();
            
            return $query->result();
        }

        public function getGuruById($where=array()){
            $query = $this->db->get_where('Guru', $where);
            $query = $query->result_array();
            if($query){
                return $query[0];
            }
        }

        public function getSiswa(){
            $this->db2->from('data_siswa');
            $query = $this->db2->get();
            
            return $query->result();
        }

        public function getSiswaById($where=array()){
            $query = $this->db2->get_where('data_siswa', $where);
            $query = $query->result_array();
            if($query){
                return $query[0];
            }
        }
    
    }
?>