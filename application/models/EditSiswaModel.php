<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class EditSiswaModel extends CI_Model {
 
    public function getSiswa(){
        $this->db2->from('data_siswa');
        $query = $this->db2->get();
        
        return $query->result();
    }

    public function getSiswaId($data){
        $this->db2->select('*');
        $this->db2->from('data_siswa');
        $this->db2->where('kd_siswa', $data);
        $query = $this->db2->get();
        $result = $query->result();
        return $result;
    }

    public function updateSiswa($id, $data){
        $this->db2->where('kd_siswa', $id);
        $this->db2->update('data_siswa', $data);
    }

}
?>
