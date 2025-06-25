<?php
header('Content-Type: application/json');

$archivo = 'animales_data.json';

// Función para obtener tweets desde X (Twitter)
function obtenerTweetsDeTwitter($usuario, $bearerToken, $limite = 5) {
    $urlUser = "https://api.twitter.com/2/users/by/username/{$usuario}";
    $headers = ["Authorization: Bearer {$bearerToken}"];

    $ch = curl_init($urlUser);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => $headers
    ]);
    $userResponse = json_decode(curl_exec($ch), true);
    curl_close($ch);

    if (!isset($userResponse['data']['id'])) {
        return ["error" => "No se pudo obtener el ID del usuario."];
    }

    $userId = $userResponse['data']['id'];

    $urlTweets = "https://api.twitter.com/2/users/{$userId}/tweets?max_results={$limite}&tweet.fields=id,text,author_id";
    $ch = curl_init($urlTweets);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => $headers
    ]);
    $tweetsResponse = json_decode(curl_exec($ch), true);
    curl_close($ch);

    $tweetsSimplificados = [];
    foreach ($tweetsResponse['data'] ?? [] as $tweet) {
        $tweetsSimplificados[] = [
            'ID' => $tweet['id'],
            'Texto' => $tweet['text'],
            'Autor' => $usuario
        ];
    }

    return $tweetsSimplificados;
}

// Leer datos del archivo JSON
$animales = json_decode(file_get_contents($archivo), true);

// Obtener método de la petición
$metodo = $_SERVER['REQUEST_METHOD'];

if ($metodo === 'GET') {
    $pagina = isset($_GET['page']) ? intval($_GET['page']) : 1;
    $porPagina = 10;
    $total = count($animales);
    $inicio = ($pagina - 1) * $porPagina;
    $animalesPaginados = array_slice($animales, $inicio, $porPagina);

    // Agregar tweets si se solicita
    if (isset($_GET['twitter']) && $_GET['twitter'] == '1') {
        $tweets = obtenerTweetsDeTwitter('BioanimalUAH', 'MI TOKEN');
        echo json_encode([
            'animales' => $animalesPaginados,
            'tweets' => $tweets
        ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    } else {
        echo json_encode($animalesPaginados, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }
} elseif ($metodo === 'POST') {
    $nuevoAnimal = json_decode(file_get_contents('php://input'), true);
    if ($nuevoAnimal) {
        $ultimoID = end($animales)['ID'];
        $nuevoAnimal['ID'] = $ultimoID + 1;
        $nuevoAnimal['Creado_en'] = date('c');
        $animales[] = $nuevoAnimal;
        file_put_contents($archivo, json_encode($animales, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
        echo json_encode(['mensaje' => 'Animal agregado correctamente'], JSON_UNESCAPED_UNICODE);
    } else {
        echo json_encode(['error' => 'Datos inválidos'], JSON_UNESCAPED_UNICODE);
    }
} else {
    echo json_encode(['error' => 'Método no permitido'], JSON_UNESCAPED_UNICODE);
}
