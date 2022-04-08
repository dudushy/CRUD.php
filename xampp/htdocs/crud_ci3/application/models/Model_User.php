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
    
    public function createUser($profileId, $userName, $userNickname, $userEmail, $userTelephone){
        $arrayData = array(
            'prf_id' => $profileId,
            'usr_name' => $userName,
            'usr_nickname' => $userNickname,
            'usr_email' => $userEmail,
            'usr_telephone' => $userTelephone
        );
        
        $this->db->insert('tb_user', $arrayData);
    }
    
    public function readUser() {
        $query = $this->db->query("SELECT * FROM tb_user u INNER JOIN tb_profile p ON u.prf_id = p.prf_id");
        return $query->result();
    }
    
    public function deleteUser($id) {
        $this->db->where('usr_id', $id);
        $this->db->delete('tb_user');
    }
}