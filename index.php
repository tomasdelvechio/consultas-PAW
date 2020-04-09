<?php

include 'models/Turno.model.php';
include 'models/TurnoList.model.php';

use App\models\TurnoList;

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$http_method = $_SERVER["REQUEST_METHOD"];

$mensajes = [];

if ($http_method == "GET" && $path == '/') {
    include 'views/index.view.php';
} else if ($http_method == "POST" && $path == '/save_turno') {
    $app_turnos = new TurnoList;
    $turno = $app_turnos->create_turno($_POST);
    $turno->validar();
    $mensajes = array_merge($mensajes, $turno->mensajes_validaciones);
    include 'views/index.view.php';
}
