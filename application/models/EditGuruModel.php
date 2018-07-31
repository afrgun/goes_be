<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class EditGuruModel extends CI_Model {
 
    public function getPosts(){
        $this->db->from('Guru');
        $query = $this->db->get();
        
        return $query->result();
    }

    public function getPostsId($data){
        $this->db->select('*');
        $this->db->from('Guru');
        $this->db->where('kd_guru', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    
    public function updatePosts($id, $data){
        $this->db->where('kd_guru', $id);
        $this->db->update('Guru', $data);
    }
 
}
?>