<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\HomeController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\periodoController;
use App\Http\Controllers\profesoresController;
use App\Http\Controllers\materiasController;
use App\Http\Controllers\gradosController;
use App\Http\Controllers\notasController;
use App\Http\Controllers\calificacionesController;
use Illuminate\Support\Facades\Auth;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/alumnos', 'HomeController@indexalumno')->name('alumnos');
//Route::get('/alumnos', 'AlumnoController@index')->name('alumnos');
//Route::get('/alumnos', [App\Http\Controllers\AlumnosController::class, 'index'])->name('alumnos');
//Route::get('/', [HomeController::class,'indexalumnos']);
//Route::get('/home', [App\Http\Controllers\HomeController::indexalumno(), 'Alumnos.index'])->name('Alumnos');
//Route::resource('alumnos', 'AlumnoController');
//Route::get('/periodo', [App\Http\Controllers\periodoController::class, 'index'])->name('periodo');
Route::get('/alumnos', 'AlumnoController@index');
Route::resource('alumnos', 'AlumnoController');
Route::get('/periodo', 'periodoController@index');
Route::resource('periodo', 'periodoController');
Route::get('/profesores', 'profesoresController@index');
Route::resource('profesores', 'profesoresController');
Route::get('/materias', 'materiasController@index');
Route::resource('materias', 'materiasController');
Route::get('/grados', 'gradosController@index');
Route::resource('grados', 'gradosController');
Route::get('/notas', 'notasController@index');
Route::resource('notas', 'notasController');
Route::get('/calificaciones', 'calificacionesController@index');
Route::resource('calificaciones', 'calificacionesController');

