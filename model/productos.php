<?php

include 'conexion.php';

class barrilito {

    private $db;
    private $lista;

    public function __construct() {
        $this->db = conexion::conn();
        $this->arraydb = array();
    }

    public function cervezas() {
        $resultado = $this->db->query( 'SELECT marca, tipo, costo FROM `cervezas` WHERE id = 10' );
        while( $filas = $resultado->fetch_assoc() ) {
            $this->lista[] = $filas;
        }
        return $this->lista;

    }

}

class caguama {

    private $db;
    private $lista;

    public function __construct() {
        $this->db = conexion::conn();
        $this->arraydb = array();
    }

    public function cervezas() {
        $resultado = $this->db->query( 'SELECT marca, tipo, costo FROM `cervezas` WHERE id = 1' );
        while( $filas = $resultado->fetch_assoc() ) {
            $this->lista[] = $filas;
        }
        return $this->lista;

    }

}

class coors {

    private $db;
    private $lista;

    public function __construct() {
        $this->db = conexion::conn();
        $this->arraydb = array();
    }

    public function cervezas() {
        $resultado = $this->db->query( 'SELECT marca, tipo, costo FROM `cervezas` WHERE id = 2' );
        while( $filas = $resultado->fetch_assoc() ) {
            $this->lista[] = $filas;
        }
        return $this->lista;

    }

}

class granmodelo {

    private $db;
    private $lista;

    public function __construct() {
        $this->db = conexion::conn();
        $this->arraydb = array();
    }

    public function cervezas() {
        $resultado = $this->db->query( 'SELECT marca, tipo, costo FROM `cervezas` WHERE id = 8' );
        while( $filas = $resultado->fetch_assoc() ) {
            $this->lista[] = $filas;
        }
        return $this->lista;

    }

}
class heineken {

    private $db;
    private $lista;

    public function __construct() {
        $this->db = conexion::conn();
        $this->arraydb = array();
    }

    public function cervezas() {
        $resultado = $this->db->query( 'SELECT marca, tipo, costo FROM `cervezas` WHERE id = 16' );
        while( $filas = $resultado->fetch_assoc() ) {
            $this->lista[] = $filas;
        }
        return $this->lista;

    }

}
class indio {

    private $db;
    private $lista;

    public function __construct() {
        $this->db = conexion::conn();
        $this->arraydb = array();
    }

    public function cervezas() {
        $resultado = $this->db->query( 'SELECT marca, tipo, costo FROM `cervezas` WHERE id = 17' );
        while( $filas = $resultado->fetch_assoc() ) {
            $this->lista[] = $filas;
        }
        return $this->lista;

    }

}
class modelo {

    private $db;
    private $lista;

    public function __construct() {
        $this->db = conexion::conn();
        $this->arraydb = array();
    }

    public function cervezas() {
        $resultado = $this->db->query( 'SELECT marca, tipo, costo FROM `cervezas` WHERE id = 6' );
        while( $filas = $resultado->fetch_assoc() ) {
            $this->lista[] = $filas;
        }
        return $this->lista;

    }

}

class negramodelo {

    private $db;
    private $lista;

    public function __construct() {
        $this->db = conexion::conn();
        $this->arraydb = array();
    }

    public function cervezas() {
        $resultado = $this->db->query( 'SELECT marca, tipo, costo FROM `cervezas` WHERE id = 13' );
        while( $filas = $resultado->fetch_assoc() ) {
            $this->lista[] = $filas;
        }
        return $this->lista;

    }

}
class pasifico {

    private $db;
    private $lista;

    public function __construct() {
        $this->db = conexion::conn();
        $this->arraydb = array();
    }

    public function cervezas() {
        $resultado = $this->db->query( 'SELECT marca, tipo, costo FROM `cervezas` WHERE id = 18' );
        while( $filas = $resultado->fetch_assoc() ) {
            $this->lista[] = $filas;
        }
        return $this->lista;

    }

}
class sixbuduel {

    private $db;
    private $lista;

    public function __construct() {
        $this->db = conexion::conn();
        $this->arraydb = array();
    }

    public function cervezas() {
        $resultado = $this->db->query( 'SELECT marca, tipo, costo FROM `cervezas` WHERE id = 19' );
        while( $filas = $resultado->fetch_assoc() ) {
            $this->lista[] = $filas;
        }
        return $this->lista;

    }

}
class sixcorona {

    private $db;
    private $lista;

    public function __construct() {
        $this->db = conexion::conn();
        $this->arraydb = array();
    }

    public function cervezas() {
        $resultado = $this->db->query( 'SELECT marca, tipo, costo FROM `cervezas` WHERE id = 20' );
        while( $filas = $resultado->fetch_assoc() ) {
            $this->lista[] = $filas;
        }
        return $this->lista;

    }

}
class sixultra {

    private $db;
    private $lista;

    public function __construct() {
        $this->db = conexion::conn();
        $this->arraydb = array();
    }

    public function cervezas() {
        $resultado = $this->db->query( 'SELECT marca, tipo, costo FROM `cervezas` WHERE id = 21' );
        while( $filas = $resultado->fetch_assoc() ) {
            $this->lista[] = $filas;
        }
        return $this->lista;

    }

}
class sixvictoria {

    private $db;
    private $lista;

    public function __construct() {
        $this->db = conexion::conn();
        $this->arraydb = array();
    }

    public function cervezas() {
        $resultado = $this->db->query( 'SELECT marca, tipo, costo FROM `cervezas` WHERE id = 22' );
        while( $filas = $resultado->fetch_assoc() ) {
            $this->lista[] = $filas;
        }
        return $this->lista;

    }

}
class tecate {

    private $db;
    private $lista;

    public function __construct() {
        $this->db = conexion::conn();
        $this->arraydb = array();
    }

    public function cervezas() {
        $resultado = $this->db->query( 'SELECT marca, tipo, costo FROM `cervezas` WHERE id = 23' );
        while( $filas = $resultado->fetch_assoc() ) {
            $this->lista[] = $filas;
        }
        return $this->lista;

    }

}
class tecaterojo {

    private $db;
    private $lista;

    public function __construct() {
        $this->db = conexion::conn();
        $this->arraydb = array();
    }

    public function cervezas() {
        $resultado = $this->db->query( 'SELECT marca, tipo, costo FROM `cervezas` WHERE id = 24' );
        while( $filas = $resultado->fetch_assoc() ) {
            $this->lista[] = $filas;
        }
        return $this->lista;

    }

}
class ultra {

    private $db;
    private $lista;

    public function __construct() {
        $this->db = conexion::conn();
        $this->arraydb = array();
    }

    public function cervezas() {
        $resultado = $this->db->query( 'SELECT marca, tipo, costo FROM `cervezas` WHERE id = 11' );
        while( $filas = $resultado->fetch_assoc() ) {
            $this->lista[] = $filas;
        }
        return $this->lista;

    }

}

?>