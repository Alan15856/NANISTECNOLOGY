<?php



$nombre = $_POST['nombre'];
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];

include("../model/agregar.php");
$obj = new agregar();
$resultado = $obj -> agregar_usuarios($nombre,$email,$contrasena);


exit(json_encode([
    "status" => "1",
    
]));



?>