<?php

$correo = $_POST['correo'];

include("enviar.php");
$obj = new enviar();
$resultado = $obj -> enviar_correo($correo);
exit(json_encode(
    ["status"=>"1"]
));
?>