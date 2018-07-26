<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class DaftarGuruModel extends CI_Model {
 
    public function getPosts(){
        $this->db->from('Guru');
        $query = $this->db->get();
        
        return $query->result();
    }

    public function deletePosts($id){
        $this->db->where('kd_guru', $id);
        $query = $this->db->delete('Guru');
    }

    public function updatePosts($id, $data){
        $this->db->where('kd_guru', $id);
        $this->db->update('Guru', $data);
    }
 
}
?>