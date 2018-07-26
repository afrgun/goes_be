<?php

require APPPATH . '/libraries/REST_Controller.php';

class kontak extends REST_Controller {
 
    function __Construct($config = 'rest') {
        parent::__Construct ($config);
        $this->load->database(); // load database
    }


    // show data
    public function index_get() {

        $nim = $this->get('kd_guru');
        if ($nim == '') {
            $mahasiswa = $this->db->get('Guru')->result();
        } else {
            $this->db->where('kd_guru', $nim);
            $mahasiswa = $this->db->get('Guru')->result();
        }
        $this->response($mahasiswa, 200);
    }
}
?>