<?php
header('Content-Type: application/json');

$respuesta = ["mensaje" => "hello"];
echo json_encode($respuesta);
?>