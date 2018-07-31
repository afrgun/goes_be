<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class AuthModel extends CI_Model {

        var $client_service = "goes";
        var $auth_key = "simplerestapi";

        public function check_auth_client(){
            $input_client_service = $this->input->get_request_header('Client_Service', TRUE);
            $input_auth_key = $this->input->get_request_header('Auth_key', TRUE);

            //if($input_client_service == $this->client_service && $input_auth_key == $this->auth_key){
                return true;
            //} else{
                //return json_output(401, array('status' => 401, 'message' => 'Unauthorized Headers.'));
            //}
        }

        //mengecek data di db
        public function login($kode, $password){
            $q      = $this->db->select('*')->from('Guru')->where('kd_guru', $kode)->get()->row();
            $siswa  = $this->db2->select('*')->from('data_siswa')->where('kd_siswa', $kode)->get()->row();

            if($q == "" && $siswa == ""){
                return array('status' => 204, 'message'=> 'User not found');
            } else {
                $hashed_pass = $q->pass_guru;
                $kode     = $q->kd_guru;
                $nm_guru     = $q->nm_guru;
                $tgl_lahir   = $q->tgl_lahir;
                $stat        = $q->status;
                $jk          = $q->jk;
                $pendidikan  = $q->pendidikan;

                //$passwordMD5 = substr( md5($pass_guru), 0, 32);
                $passwordMD5 = substr( $password, 0, 32);
                if (hash_equals($hashed_pass, $passwordMD5)){
                    //$last_login = date('Y-m-d H:i:s');

                    //$token = crypt($passwordMD5, 10);
                    //$expired_at = date("Y-m-d H:i:s", strtotime('+12 hours'));

                    $this->db->trans_start();
                    //$this->db->where('kd_guru', $kd_guru)->update('Guru', array('last_login'=>$last_login));
                    
                    //insert to db guru_authentication
                    
                    //$this->db->insert('login', array('kd_guru'=>$kd_guru,'token' => $token, 'expired_at'=>$expired_at));

                    if($this->db->trans_status() === FALSE){
                    
                        $this->db->trans_rollback();
                        return array('status' => 500, 'message'=>'Internal server error');
                    } else {
                        $this->db->trans_commit();
                        return array('status' => 200, 'message' =>'Successfully  login', 'kode' => $kode, 'nama' => $nm_guru, 'ttl' => $tgl_lahir, 'stat' => $stat, 'pendidikan' => $pendidikan
                        );
                    }
                } else {
                    return array('status'=>204, 'message'=>'wrong password');
                }
            }
        }

        public function logout(){
            $users_id   = $this->input->get_request_header('User-ID', true);
            $token      = $this->input->get_request_header('Authorization', TRUE);

            if($users_id == ""){
                return array('status' => 204, 'message' => 'Headers ID is Null');
            } /*elseif ($token == ""){
                return array('status' => 204, 'message' => 'Headers Auth is Null');
            }*/ else {
                //$this->db->where('kd_guru', )
                return array('status' => 200, 'message' => 'Successfully logout');
            }
        }
    }

?>