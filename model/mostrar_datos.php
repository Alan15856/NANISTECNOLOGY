<?php

include 'conexion.php';

class producto{

    private $db;
    private $lista;

    public function __construct(){
        $this->db = conexion::conn();
        $this->arraydb = array();
    }


        public function cervezas(){
            $resultado = $this->db->query("SELECT * FROM cervezas");
            while($filas = $resultado->fetch_assoc()){
                $this->lista[] = $filas;
            }
            return $this->lista;

        }


    }


?>