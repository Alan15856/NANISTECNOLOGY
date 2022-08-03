<?php

include 'conexion.php';

class eliminar{

    private $db;
    private $lista;

    public function __construct(){
        $this->db = conexion::conn();
        $this->arraydb = array();
    }


        public function eliminar_producto($id){
            $resultado = $this->db->query("DELETE FROM cervezas WHERE id = '$id'");
           

        }


    }


?>