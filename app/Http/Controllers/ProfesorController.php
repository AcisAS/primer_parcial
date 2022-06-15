<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use App\Models\UnidadAprendizaje;
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
        $unidadesprofesor = Profesor::find($req->id)->unidadaprendizaje;
        $profesor = Profesor::where('idProfesor', $req->id)->get();

        return view('tabla.unidadesprofesor', compact('unidadesprofesor', 'profesor'));
    }

    public function registrarProfesor(Request $req)
    {
        Profesor::create([
            'idProfesor' => $req->id,
            'nombre' => $req->nombre,
            'apellido' => $req->apellido,
            'rfc' => $req->rfc,
        ]);
        $profesor = Profesor::find($req->id);

        // Guardar la relacion del profesor con las materias seleccionadas
        foreach ($req->materia as $materia) {
            $unidad = UnidadAprendizaje::find($materia);

            $profesor->unidadaprendizaje()->attach($unidad);
        }

        return redirect()->route('consulta_general_profesores');
    }

    public function eliminarProfesor(Request $req)
    {
        Profesor::where('idProfesor', $req->id)->delete();
        return redirect()->route('consulta_general_profesores');
    }
}
