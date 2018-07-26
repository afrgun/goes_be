<?php

    defined('BASEPATH') OR exit('No direct script access allowed');
    class Api extends CI_Controller {
 
        function __Construct(){
            parent::__Construct ();

            //load model m_api.php
            $this->load->model('M_api');
            header('Access-Control-Allow-Origin: *');
            header('Access-Control-Allow-Method: PUT, GET, POST, DELETE, OPTIONS');
            header('Access-Control-Allow-Headers: Content-Type, x-xsrf-token');
            header('Content-Type: application/json');
        }

        public function guru(){
            $guru = $this->M_api->getGuru(); // calling Post model method getPosts()
            
            if(!empty($guru)){
                foreach ($guru as $res){
                    $json[] = array(
                        "kd_guru" => $res->kd_guru,
                        "nm_guru" => $res->nm_guru,
                        "tgl_lahir" => $res->tgl_lahir,
                        "status" => $res->status,
                        "jk" => $res->jk,
                        "pendidikan" => $res->pendidikan,
                        "pass_guru" => $res->pass_guru
                    );
                }
            } else {
                $json = array();
            }
            echo json_encode($json);
        }

        public function guruById(){
            $id = $this->input->get('kd_guru');
            
            if(!empty($id)){
                $kolom = array(
                    'kd_guru' => $id
                );
                $get = $this->M_api->getGuruById($kolom);

                $json[] = array(
                    "kd_guru" => $get['kd_guru'],
                    "nm_guru" => $get['nm_guru'],
                    "tgl_lahir" => $get['tgl_lahir'],
                    "status" => $get['status'],
                    "jk" => $get['jk'],
                    "pendidikan" => $get['pendidikan'],
                    "pass_guru" => $get['pass_guru']
                );
            } else {
                $json = array();
            }
            echo json_encode($json);
        }

        public function login(){
            $method = $_SERVER['REQUEST_METHOD'];
            if($method != 'POST'){
                json_output(400, array('status' => 400, 'message' => 'Bad Request.'));
            } else {
                $check_auth_client = $this->AuthModel->check_auth_client();
                if($check_auth_client == true){
                    $params = json_decode(file_get_contents('php://input'), TRUE);
                    $kd_guru = $params['kd_guru'];
                    $pass_guru = $params['pass_guru'];

                    $response = $this->AuthModel->login($kd_guru, $pass_guru);
                    json_output($response['status'], $response);
                }
            }
        }
    }

?>