<?php

namespace App\models;

use App\models\Turno;

class TurnoList
{
    public $turnos = [];

    public function create_turno($datos_turno)
    {
        $turno = new Turno;
        $turno->set_datos($datos_turno);
        $this->turnos[] = $turno;
        return $turno;
    }
}
