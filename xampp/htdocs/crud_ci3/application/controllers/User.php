<?php

class User extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Model_User');
    }

    public function index(){
        $data['content'] = 'user/index';
        $data['readProfile'] = $this->Model_User->readProfile();
        $data['readUser'] = $this->Model_User->readUser();
        $this->load->view('model', $data);
    }
    
    public function create() {
        $data = $this->input->post();
        
        if (isset($data)){
            $prf_id = $data['prf_id'];
            $usr_name = $data['usr_name'];
            $usr_nickname = $data['usr_nickname'];
            $usr_email = $data['usr_email'];
            $usr_telephone = $data['usr_telephone'];
            $this->Model_User->createUser($prf_id, $usr_name, $usr_nickname, $usr_email, $usr_telephone);
            redirect('');
        }
    }
    
    public function delete($usr_id = NULL) {
        if ($usr_id != NULL) {
           $this->Model_User->deleteUser($usr_id);
           redirect('');
        }
    }
    
    public function edit($usr_id = NULL) {
        if ($usr_id != NULL) {
            $data['content'] = 'user/edit';
            $data['readProfile'] = $this->Model_User->readProfile();
            $data['dataUser'] = $this->Model_User->readUserById($usr_id);
            $this->load->view('model', $data);
        } else {
            redirect('');
        }
    }
    
    public function update() {
        $data = $this->input->post();
        
        if (isset($data)){
            $usr_id = $data['usr_id'];
            $prf_id = $data['prf_id'];
            $usr_name = $data['usr_name'];
            $usr_nickname = $data['usr_nickname'];
            $usr_email = $data['usr_email'];
            $usr_telephone = $data['usr_telephone'];
            $this->Model_User->updateUser($usr_id, $prf_id, $usr_name, $usr_nickname, $usr_email, $usr_telephone);
            redirect('');
        }
    }
}