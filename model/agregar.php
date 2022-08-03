<?php

include 'conexion.php';

class agregar{

    private $db;
    private $lista;

    public function __construct() {
        $this->db = conexion::conn();
        $this->arraydb = array();

        
    }public function agregar_usuarios( $nombre, $email, $contrasena ) {
        $resultado = $this->db->query( "INSERT INTO usuarios (nombre, correo, pass) VALUES ('$nombre','$email','$contrasena')"
    );
}

}

?>