<?php
    class Daftar_guru extends CI_Controller {
 
    function __Construct(){
        parent::__Construct ();
        $this->load->database(); // load database
        $this->load->model('DaftarGuruModel'); // load model 
        $this->load->library('session');
    }
 
    public function index() {
        $this->load->helper('url');

        $id = $this->uri->segment(3);
        $this->data['gurus'] = $this->DaftarGuruModel->getPosts(); // calling Post model method getPosts()
        $this->DaftarGuruModel->deletePosts($id);
        //view
        $this->load->view('daftar_guru', $this->data); // load the view file , we are passing $data array to view file
        
    }

    public function delete(){
        //delete
        $id = $this->uri->segment(3);
        $this->DaftarGuruModel->deletePosts($id);
        //$this->deletePosts();
        
        $this->session->set_flashdata('success', "Data terhapus"); 
        $this->index();
    }

}
?>