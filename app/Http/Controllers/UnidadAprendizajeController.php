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

        return view('tabla.unidades', compact('unidades'));
    }

    public function registrarUnidadesAprendizaje(Request $req)
    {
        UnidadAprendizaje::create([
            'idUnidadAprendizaje' => $req->id,
            'nombre' => $req->nombre,
            'horas_clase' => $req->hclase,
            'horas_taller' => $req->htaller,
            'horas_laboratorio' => $req->hlaboratorio
        ]);
        return redirect()->route('consulta_general_profesores');
    }
}
