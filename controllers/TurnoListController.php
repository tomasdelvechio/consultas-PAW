<?php

namespace App\controllers;

use App\models\TurnoList;

class TurnoListController
{
    public $mensajes = [];

    public function index()
    {
        include 'views/index.view.php';
    }

    public function save()
    {
        $app_turnos = new TurnoList;
        $turno = $app_turnos->create_turno($_POST);
        $turno->validar();
        $this->mensajes = array_merge($this->mensajes, $turno->mensajes_validaciones);
        include 'views/index.view.php';
    }

    public function send_client_error()
    {
        http_response_code(404);
        include 'views/404.error.php';
    }
}
