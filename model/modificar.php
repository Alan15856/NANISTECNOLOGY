<?php

include 'conexion.php';

class modificar{

    private $db;
    private $lista;

    public function __construct(){
        $this->db = conexion::conn();
        $this->arraydb = array();
    }


        public function modificar_producto($id,$producto){
            $resultado = $this->db->query("UPDATE cervezas SET marca = '$producto' WHERE id = '$id'");
           

        }


    }


?>