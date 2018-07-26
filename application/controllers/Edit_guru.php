<?php
    class Edit_guru extends CI_Controller {
 
    function __Construct(){
        parent::__Construct ();
        $this->load->database(); // load database
        $this->load->model('EditGuruModel'); // load model 
        $this->load->library('session');
    }

    public function index() {
        $this->load->helper('url');
        
        $id = $this->uri->segment(3);
        $this->data['gurus'] = $this->EditGuruModel->getPosts(); // calling Post model method getPosts()
        $this->data['singleGuru'] = $this->EditGuruModel->getPostsId($id); // calling Post model method getPosts()
        
        //view
        $this->load->view('edit_guru', $this->data); // load the view file , we are passing $data array to view file
    }

    public function update(){
        $id = $this->input->post('kd_guru');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_rules('kd_guru', 'Kode guru', 'required|min_length[8]|max_length[8]');
        $this->form_validation->set_rules('nm_guru', 'Nama guru', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required');
        $this->form_validation->set_rules('pass_guru', 'Password Guru', 'required');

        $data = array(
            'kd_guru' => $this->input->post('kd_guru'),
            'nm_guru' => $this->input->post('nm_guru'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'status' => $this->input->post('status'),
            'jk' => $this->input->post('jk'),
            'pendidikan' => $this->input->post('pendidikan'),
            'pass_guru' => $this->input->post('pass_guru')
        );
        $this->EditGuruModel->updatePosts($id, $data);
            
        //$this->session->set_flashdata('success', "Data tersimpan"); 

        $this->index();
        

    }

    }    
?>