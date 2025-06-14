<?php
header('Content-Type: application/json');

$animales = [
    [
        "ID" => 1,
        "Creado_en" => "2023-04-10T14:23:00Z",
        "Nombre_cientifico" => "Panthera leo",
        "Familia" => "Felino",
        "Dieta" => "Carnívoro",
        "Peso_kg" => 190,
        "Habitat" => "Sabana africana"
    ],
    [
        "ID" => 2,
        "Creado_en" => "2022-12-01T09:15:30Z",
        "Nombre_cientifico" => "Panthera tigris",
        "Familia" => "Felino",
        "Dieta" => "Carnívoro",
        "Peso_kg" => 220,
        "Habitat" => "Bosques tropicales de Asia"
    ],
    [
        "ID" => 3,
        "Creado_en" => "2023-06-20T18:45:10Z",
        "Nombre_cientifico" => "Felis catus",
        "Familia" => "Felino",
        "Dieta" => "Carnívoro",
        "Peso_kg" => 4.5,
        "Habitat" => "Hogar doméstico"
    ],
    [
        "ID" => 4,
        "Creado_en" => "2023-05-15T11:30:00Z",
        "Nombre_cientifico" => "Canis lupus",
        "Familia" => "Canino",
        "Dieta" => "Carnívoro",
        "Peso_kg" => 45,
        "Habitat" => "Bosques y tundras"
    ],
    [
        "ID" => 5,
        "Creado_en" => "2023-01-10T08:20:00Z",
        "Nombre_cientifico" => "Delphinus delphis",
        "Familia" => "Cetáceo",
        "Dieta" => "Carnívoro",
        "Peso_kg" => 150,
        "Habitat" => "Océano"
    ],
   
];

echo json_encode([
    "mensaje" => "Lista de 10 animales",
    "total" => count($animales),
    "datos" => $animales
], JSON_PRETTY_PRINT);
?>