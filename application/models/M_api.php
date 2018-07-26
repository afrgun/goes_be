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
    
    }
?>