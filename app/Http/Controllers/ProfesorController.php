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

        return view('tabla.profesores', compact('profesores'));
    }

    public function obtenerUnidadesProfesor(Request $req)
    {
        $unidadesprofesor = Profesor::find(12)->unidadaprendizaje;

        return view('tabla.unidadesprofesor', compact('unidadesprofesor'));
        return $unidadesprofesor;
    }

    public function registrarProfesor(Request $req)
    {
        Profesor::create([
            'idProfesor' => $req->id,
            'nombre' => $req->nombre,
            'apellido' => $req->apellido,
            'rfc' => $req->rfc,
        ]);
        return redirect()->route('consulta_general_profesores');
    }

    public function eliminarProfesor(Request $req)
    {
        Profesor::where('idProfesor', $req->id)->delete();
        return redirect()->route('consulta_general_profesores');
    }
}
