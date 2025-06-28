<?php
header("Content-Type: application/json");

// Obtener datos enviados en POST (JSON)
$input = json_decode(file_get_contents("php://input"), true);

// Campos requeridos
$campos_requeridos = ['Nombre_cientifico', 'Familia', 'Dieta'];
$errores = [];

// Validar que existan y no estén vacíos
foreach ($campos_requeridos as $campo) {
    if (!isset($input[$campo]) || trim($input[$campo]) === '') {
        $errores[] = "El campo '$campo' es obligatorio.";
    }
}

// Si hay errores, responder con código 400 y mensaje de error
if (!empty($errores)) {
    http_response_code(400);
    echo json_encode([
        "error" => $errores
    ]);
    exit;
}

// Si todo está bien, devolver mensaje de éxito
echo json_encode([
    "mensaje" => "Datos recibidos correctamente.",
    "datos" => $input
]);
?>
