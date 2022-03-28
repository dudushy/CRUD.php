<?php

class Usuario extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Model_Usuario');
    }

    public function index(){
        $data['content'] = 'usuario/index';
        $data['selPerfil'] = $this->Model_Usuario->selPerfil();
        $this->load->view('model', $data);
    }
    
    public function insert() {
        $datos = $this->input->post();
        
        if (isset($datos)){
            $txtId = $datos['txtIdper'];
            $txtNombres = $datos['txtNombres'];
            $txtApelidos = $datos['txtApelidos'];
            $txtCorreo = $datos['txtCorreo'];
            $txtTelefone = $datos['txtTelefone'];
            $this->Model_Usuario->insertUsuario($txtId, $txtNombres, $txtApelidos, $txtCorreo, $txtTelefone);
            redirect('');
        }
    }
}