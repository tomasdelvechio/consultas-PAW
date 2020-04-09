<?php
//var_dump($_SERVER);
$path = parse_url($_SERVER["REQUEST_URI"]);
$http_method = $_SERVER["REQUEST_METHOD"];

if ($http_method == "GET" && $path == '/') {
    include 'views/index.view.php';
} else if ($http_method == "GET" && $path == '/save_turno') {
    // Crear turno desde un modelo
    // Validar campos
    // Generar mensajes de ayuda o error
    include 'views/index.view.php';
}
