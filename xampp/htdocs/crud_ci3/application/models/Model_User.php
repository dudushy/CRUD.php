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
}