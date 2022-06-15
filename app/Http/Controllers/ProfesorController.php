<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    // Recuperar todos los Profesores registrados de la tabla profesores+
    public function obtenerProfesores()
    {
        $profesores = Profesor::all();

        return $profesores;
    }

    public function obtenerUnidadesProfesor(Request $req)
    {
        $unidadesprofesor = Profesor::find(123)->unidadaprendizaje;
        return $unidadesprofesor;
    }

    public function registrarProfesor(Request $req)
    {
    }
}
