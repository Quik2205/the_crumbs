<?php
header('Content-Type: application/json');

$animales = [
    ["ID" => 1, "Creado_en" => "2023-04-10T14:23:00Z", "Nombre_cientifico" => "Panthera leo", "Familia" => "Felino", "Dieta" => "Carnívoro", "Peso_kg" => 190, "Habitat" => "Sabana africana"],
    ["ID" => 2, "Creado_en" => "2022-12-01T09:15:30Z", "Nombre_cientifico" => "Panthera tigris", "Familia" => "Felino", "Dieta" => "Carnívoro", "Peso_kg" => 220, "Habitat" => "Bosques tropicales de Asia"],
    ["ID" => 3, "Creado_en" => "2023-06-20T18:45:10Z", "Nombre_cientifico" => "Felis catus", "Familia" => "Felino", "Dieta" => "Carnívoro", "Peso_kg" => 4.5, "Habitat" => "Hogar doméstico"],
    ["ID" => 4, "Creado_en" => "2023-05-15T11:30:00Z", "Nombre_cientifico" => "Canis lupus", "Familia" => "Canino", "Dieta" => "Carnívoro", "Peso_kg" => 45, "Habitat" => "Bosques y tundras"],
    ["ID" => 5, "Creado_en" => "2023-01-10T08:20:00Z", "Nombre_cientifico" => "Delphinus delphis", "Familia" => "Cetáceo", "Dieta" => "Carnívoro", "Peso_kg" => 150, "Habitat" => "Océano"],
    ["ID" => 6, "Creado_en" => "2023-02-15T11:00:00Z", "Nombre_cientifico" => "Elephas maximus", "Familia" => "Elefántido", "Dieta" => "Herbívoro", "Peso_kg" => 5000, "Habitat" => "Selvas tropicales"],
    ["ID" => 7, "Creado_en" => "2023-03-21T15:30:00Z", "Nombre_cientifico" => "Giraffa camelopardalis", "Familia" => "Jiráfido", "Dieta" => "Herbívoro", "Peso_kg" => 800, "Habitat" => "Sabana"],
    ["ID" => 8, "Creado_en" => "2023-03-30T08:45:00Z", "Nombre_cientifico" => "Ailuropoda melanoleuca", "Familia" => "Úrsido", "Dieta" => "Herbívoro", "Peso_kg" => 100, "Habitat" => "Bosques de bambú"],
    ["ID" => 9, "Creado_en" => "2023-04-05T10:20:00Z", "Nombre_cientifico" => "Ursus arctos", "Familia" => "Úrsido", "Dieta" => "Omnívoro", "Peso_kg" => 350, "Habitat" => "Bosques y montañas"],
    ["ID" => 10, "Creado_en" => "2023-04-12T12:10:00Z", "Nombre_cientifico" => "Haliaeetus leucocephalus", "Familia" => "Accipitridae", "Dieta" => "Carnívoro", "Peso_kg" => 6, "Habitat" => "Ríos y lagos"],

    ["ID" => 11, "Creado_en" => "2023-04-15T09:00:00Z", "Nombre_cientifico" => "Struthio camelus", "Familia" => "Estrucioniforme", "Dieta" => "Omnívoro", "Peso_kg" => 140, "Habitat" => "Sabana africana"],
    ["ID" => 12, "Creado_en" => "2023-04-17T10:30:00Z", "Nombre_cientifico" => "Crocodylus niloticus", "Familia" => "Crocodylidae", "Dieta" => "Carnívoro", "Peso_kg" => 500, "Habitat" => "Ríos y lagos"],
    ["ID" => 13, "Creado_en" => "2023-04-20T14:00:00Z", "Nombre_cientifico" => "Spheniscus magellanicus", "Familia" => "Spheniscidae", "Dieta" => "Carnívoro", "Peso_kg" => 5, "Habitat" => "Costas frías"],
    ["ID" => 14, "Creado_en" => "2023-04-22T13:10:00Z", "Nombre_cientifico" => "Phascolarctos cinereus", "Familia" => "Fascolártid", "Dieta" => "Herbívoro", "Peso_kg" => 15, "Habitat" => "Bosques de eucalipto"],
    ["ID" => 15, "Creado_en" => "2023-04-24T11:45:00Z", "Nombre_cientifico" => "Macropus rufus", "Familia" => "Macropódido", "Dieta" => "Herbívoro", "Peso_kg" => 85, "Habitat" => "Llanuras australianas"],
    ["ID" => 16, "Creado_en" => "2023-04-26T12:30:00Z", "Nombre_cientifico" => "Rangifer tarandus", "Familia" => "Cérvido", "Dieta" => "Herbívoro", "Peso_kg" => 200, "Habitat" => "Tundra ártica"],
    ["ID" => 17, "Creado_en" => "2023-04-28T10:50:00Z", "Nombre_cientifico" => "Balaenoptera musculus", "Familia" => "Balaenopteridae", "Dieta" => "Carnívoro", "Peso_kg" => 150000, "Habitat" => "Océano"],
    ["ID" => 18, "Creado_en" => "2023-04-30T09:15:00Z", "Nombre_cientifico" => "Chelonia mydas", "Familia" => "Quelonio", "Dieta" => "Herbívoro", "Peso_kg" => 180, "Habitat" => "Océanos tropicales"],
    ["ID" => 19, "Creado_en" => "2023-05-02T14:25:00Z", "Nombre_cientifico" => "Phoenicopterus roseus", "Familia" => "Phoenicopteridae", "Dieta" => "Omnívoro", "Peso_kg" => 3, "Habitat" => "Humedales"],
    ["ID" => 20, "Creado_en" => "2023-05-04T13:35:00Z", "Nombre_cientifico" => "Aptenodytes forsteri", "Familia" => "Spheniscidae", "Dieta" => "Carnívoro", "Peso_kg" => 30, "Habitat" => "Antártida"],

    ["ID" => 21, "Creado_en" => "2023-05-06T11:15:00Z", "Nombre_cientifico" => "Panthera onca", "Familia" => "Felino", "Dieta" => "Carnívoro", "Peso_kg" => 100, "Habitat" => "Selva amazónica"],
    ["ID" => 22, "Creado_en" => "2023-05-08T16:45:00Z", "Nombre_cientifico" => "Equus ferus caballus", "Familia" => "Équido", "Dieta" => "Herbívoro", "Peso_kg" => 500, "Habitat" => "Campos abiertos"],
    ["ID" => 23, "Creado_en" => "2023-05-10T09:55:00Z", "Nombre_cientifico" => "Bos taurus", "Familia" => "Bóvido", "Dieta" => "Herbívoro", "Peso_kg" => 700, "Habitat" => "Granjas"],
    ["ID" => 24, "Creado_en" => "2023-05-12T13:10:00Z", "Nombre_cientifico" => "Ovis aries", "Familia" => "Bóvido", "Dieta" => "Herbívoro", "Peso_kg" => 75, "Habitat" => "Granjas"],
    ["ID" => 25, "Creado_en" => "2023-05-14T08:20:00Z", "Nombre_cientifico" => "Capra aegagrus hircus", "Familia" => "Bóvido", "Dieta" => "Herbívoro", "Peso_kg" => 60, "Habitat" => "Granjas"],
];

// Configuración de páginas fijas
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$page_sizes = [1 => 10, 2 => 10, 3 => 5];

$total_items = count($animales);
$total_pages = count($page_sizes);

// Validar página
if (!isset($page_sizes[$page])) {
    echo json_encode([
        "mensaje" => "Página fuera de rango",
        "total" => $total_items,
        "pagina_actual" => $page,
        "total_paginas" => $total_pages,
        "datos" => []
    ], JSON_PRETTY_PRINT);
    exit;
}

// Calcular el offset basado en las páginas anteriores
$offset = 0;
for ($i = 1; $i < $page; $i++) {
    $offset += $page_sizes[$i];
}

$limit = $page_sizes[$page];
$datos_pagina = array_slice($animales, $offset, $limit);

// Respuesta
echo json_encode([
    "mensaje" => "Lista paginada de animales",
    "pagina_actual" => $page,
    "elementos_en_pagina" => $limit,
    "total" => $total_items,
    "total_paginas" => $total_pages,
    "datos" => $datos_pagina
], JSON_PRETTY_PRINT);
?>


