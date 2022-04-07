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
            $txtId = $data['txtId'];
            $txtName = $data['txtName'];
            $txtNickname = $data['txtNickname'];
            $txtEmail = $data['txtEmail'];
            $txtTelephone = $data['txtTelephone'];
            $this->Model_User->createUser($txtId, $txtName, $txtNickname, $txtEmail, $txtTelephone);
            redirect('');
        }
    }
}