<?php
header("Content-Type: application/json");

$archivo = "animales_data.json";

if (!file_exists($archivo)) {
    echo json_encode(["error" => "No hay datos"]);
    exit;
}

$animales = json_decode(file_get_contents($archivo), true);
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limit = isset($_GET['limit']) ? (int)$_GET['limit'] : 10;

$offset = ($page - 1) * $limit;
$total = count($animales);

$pagina = array_slice($animales, $offset, $limit);

echo json_encode([
    "pagina" => $page,
    "por_pagina" => $limit,
    "total_animales" => $total,
    "animales_mostrados" => count($pagina),
    "datos" => $pagina
], JSON_PRETTY_PRINT);
?>
