<?php

namespace App\models;

class Turno
{
    public $datos = [];
    public $mensajes_validaciones = []; // errores que se encuentren

    public function set_datos(array $datos)
    {
        $this->datos = $datos;
    }

    public function validar()
    {
        // realizar las validaciones que se consideren necesarias
        // Estos mensajes NUNCA deben contener HTML en el string
        $this->mensajes_validaciones[] = "Aca van mensajes al usuario de validaciones que hayan fallado";
        return true;
    }


}
