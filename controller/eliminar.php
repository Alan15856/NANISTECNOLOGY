<?php

$id = $_POST['id'];

include("../model/eliminar.php");
$obj = new eliminar();
$resultado = $obj -> eliminar_producto($id);

exit(json_encode([
    "status" => "1"
]));

?>