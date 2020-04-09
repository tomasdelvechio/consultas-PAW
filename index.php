<?php

include 'models/Turno.model.php';
include 'models/TurnoList.model.php';
include 'controllers/TurnoListController.php';

use App\controllers\TurnoListController;

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$http_method = $_SERVER["REQUEST_METHOD"];

$app = new TurnoListController;

if ($http_method == "GET" && $path == '/') {
    $app->index();
} else if ($http_method == "POST" && $path == '/save_turno') {
    $app->save();
} else {
    $app->send_client_error();
}
