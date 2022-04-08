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
    
    public function delete($id = NULL) {
        if ($id != NULL) {
           $this->Model_User->deleteUser($id);
           redirect('');
        }
    }
    
    public function edit($id = NULL) {
        if ($id != NULL) {
            $data['content'] = 'user/edit';
            $data['readProfile'] = $this->Model_User->readProfile();
            $data['dataUser'] = $this->Model_User->readUserById($id);
            $this->load->view('model', $data);
        } else {
            redirect('');
        }
    }
    
    public function update() {
        $data = $this->input->post();
        
        if (isset($data)){
            $txtUserId = $data['txtUserId'];
            $txtProfileId = $data['txtProfileId'];
            $txtUserName = $data['txtUserName'];
            $txtUserNickname = $data['txtUserNickname'];
            $txtUserEmail = $data['txtUserEmail'];
            $txtUserTelephone = $data['txtUserTelephone'];
            $this->Model_User->updateUser($txtUserId, $txtProfileId, $txtUserName, $txtUserNickname, $txtUserEmail, $txtUserTelephone);
            redirect('');
        }
    }
}