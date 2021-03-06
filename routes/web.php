<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('periodos', App\Http\Controllers\PeriodoController::class);

Route::resource('alumnos', App\Http\Controllers\alumnoController::class);

Route::resource('usuarios', App\Http\Controllers\usuarioController::class);

Route::resource('materias', App\Http\Controllers\materiaController::class);

Route::resource('inscripcions', App\Http\Controllers\inscripcionController::class);