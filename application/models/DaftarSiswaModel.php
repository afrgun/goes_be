<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class DaftarSiswaModel extends CI_Model {
 
    public function getSiswa(){

        $this->db2->from('data_siswa');
        $query = $this->db2->get();
        
        return $query->result();
    }

    public function deleteSiswa($id){
        $this->db2->where('kd_siswa', $id);
        $query = $this->db2->delete('data_siswa');
    }

    /*public function updatePosts($id, $data){
        $this->db->where('kd_guru', $id);
        $this->db->update('Guru', $data);
    }*/
 
}
?>