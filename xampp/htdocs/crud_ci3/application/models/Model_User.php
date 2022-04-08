<?php

class Model_User extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function readProfile() {
        $query = $this->db->query("SELECT * FROM tb_profile");
        return $query->result();
    }
    
    public function createUser($prf_id, $usr_name, $usr_nickname, $usr_email, $usr_telephone){
        $arrayData = array(
            'prf_id' => $prf_id,
            'usr_name' => $usr_name,
            'usr_nickname' => $usr_nickname,
            'usr_email' => $usr_email,
            'usr_telephone' => $usr_telephone
        );
        
        $this->db->insert('tb_user', $arrayData);
    }
    
    public function readUser() {
        $query = $this->db->query("SELECT * FROM tb_user u INNER JOIN tb_profile p ON u.prf_id = p.prf_id");
        return $query->result();
    }
    
    public function deleteUser($usr_id) {
        $this->db->where('usr_id', $usr_id);
        $this->db->delete('tb_user');
    }
    
    public function readUserById($usr_id) {
        $query = $this->db->query("SELECT * FROM tb_user u INNER JOIN tb_profile p ON u.prf_id = p.prf_id WHERE u.usr_id = $usr_id");
        return $query->result();
    }
    
    public function updateUser($usr_id, $prf_id, $usr_name, $usr_nickname, $usr_email, $usr_telephone) {
        $array = array(
            'usr_id' => $usr_id,
            'prf_id' => $prf_id,
            'usr_name' => $usr_name,
            'usr_nickname' => $usr_nickname,
            'usr_email' => $usr_email,
            'usr_telephone' => $usr_telephone
        );
        $this->db->where('usr_id', $usr_id);
        $this->db->update('tb_user', $array);
    }
}