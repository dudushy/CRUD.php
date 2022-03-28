<?php

class Model_Usuario extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function selPerfil() {
        $query = $this->db->query("SELECT * FROM perfil");
        return $query->result();
    }
    
    public function insertUsuario($idper, $nombres, $apelidos, $correo, $telefone){
        $arrayDatos = array(
            'per_id' => $idper,
            'usu_nombres' => $nombres,
            'usu_apellidos' => $apelidos,
            'usu_correo' => $correo,
            'usu_telefono' => $telefone
        );
        
        $this->db->insert('usuario', $arrayDatos);
    }
}