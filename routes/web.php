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
    return view('principal');
});

Route::prefix('profesores')->group(function () {

    Route::controller(ProfesorController::class)->group(function () {
        Route::get('/consulta', 'obtenerProfesores')->name('consulta_general_profesores');
        Route::get('/consultarsusunidades', 'obtenerUnidadesProfesor');
        Route::post('/registro', 'registrarProfesor');
    });
});

Route::prefix('unidades')->group(function () {

    Route::controller(UnidadAprendizajeController::class)->group(function () {
        Route::get('/consulta', 'obtenerUnidadesAprendizaje')->name('consulta_general_unidades');
        Route::post('/registro', 'registrarUnidadesAprendizaje');
    });
});
