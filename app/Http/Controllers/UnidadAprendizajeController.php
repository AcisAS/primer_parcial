<?php

namespace App\Http\Controllers;

use App\Models\UnidadAprendizaje;
use Illuminate\Http\Request;

class UnidadAprendizajeController extends Controller
{

    // Recuperar todas las unidades de aprendizaje registradas de la tabla unidadaprendizaje
    public function obtenerUnidadesAprendizaje()
    {
        $unidades = UnidadAprendizaje::all();

        return $unidades;
    }

    public function registrarUnidadesAprendizaje()
    {
    }
}
