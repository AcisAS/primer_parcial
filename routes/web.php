<?php

use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\UnidadAprendizajeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('consulta_general_profesores');
});

Route::prefix('profesores')->group(function () {

    Route::controller(ProfesorController::class)->group(function () {
        Route::get('/', 'obtenerProfesores')->name('consulta_general_profesores');
        Route::post('/consultarsusunidades', 'obtenerUnidadesProfesor')->name('obtenerUnidadesProfesor');
        Route::get('/registro', 'registrarProfesor')->name('registrarProfesor');
        Route::post('/eliminar', 'eliminarProfesor')->name('eliminarProfesor');
    });
});

Route::prefix('unidades')->group(function () {

    Route::controller(UnidadAprendizajeController::class)->group(function () {
        Route::get('/', 'obtenerUnidadesAprendizaje')->name('consulta_general_unidades');
        Route::post('/registro', 'registrarUnidadesAprendizaje')->name('registrarUnidad');
        Route::post('/eliminar', 'eliminarUnidadesAprendizaje')->name('eliminarUnidad');
        Route::post('/cargar', 'obtenerUnidades')->name('obtenerUnidades');
    });
});
