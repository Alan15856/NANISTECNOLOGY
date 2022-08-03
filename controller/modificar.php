<?php

$id = $_POST['id'];
$producto = $_POST['producto'];
include("../model/modificar.php");
$obj = new modificar();
$resultado = $obj -> modificar_producto($id,$producto);

exit(json_encode([
    "status" => "1"
]));

?>