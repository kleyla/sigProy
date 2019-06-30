<?php

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

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//      Rutas ADMIN
Route::get('/admin/welcome', 'EjemploController@welcome')->name('adminWelcome');
Route::get('/admin/conductorPerfil', 'ConductorController@conductorPerfil');
Route::get('/admin/conductores', 'ConductorController@conductores')->name('conductores');
Route::get('/admin/micros', 'MicroController@micros')->name('micros');
Route::get('/admin/microNew', 'MicroController@microNew')->name('microNew');
Route::post('/admin/microSave', 'MicroController@microSave')->name('microSave');
Route::get('/admin/ruta', 'RutaController@index')->name('ruta');
Route::get('/admin/propietarios', 'PropietarioController@propietarios')->name('propietarios');
Route::get('/admin/propietarioNew', 'PropietarioController@propietarioNew')->name('propietarioNew');
Route::post('/admin/propietarioSave', 'PropietarioController@propietarioSave')->name('propietarioSave');

Route::get('/admin/conductorNew', 'ConductorController@conductorNew')->name('conductorNew');
Route::post('/admin/conductorSave', 'ConductorController@conductorSave')->name('conductorSave');

Route::get('/admin/users', 'UserController@users')->name('users');
Route::get('/admin/userNew', 'UserController@userNew')->name('userNew');
Route::post('/admin/userSave', 'UserController@userSave')->name('userSave');

Route::get('/admin/rutas', 'RutaController@rutas')->name('rutas');
Route::get('/admin/rutaNew', 'RutaController@rutaNew')->name('rutaNew');
Route::post('/admin/rutaSave', 'RutaController@rutaSave')->name('rutaSave');

Route::get('/admin/turnos', 'TurnoController@turnos')->name('turnos');
Route::get('/admin/rutaNew', 'RutaController@rutaNew')->name('rutaNew');
Route::post('/admin/rutaSave', 'RutaController@rutaSave')->name('rutaSave');

Route::get('/admin/horarios', 'HorarioController@horarios')->name('horarios');
Route::get('/admin/horario/horarioNew', 'HorarioController@horarioNew')->name('horarioNew');
Route::post('/admin/horarioSave', 'HorarioController@horarioSave')->name('horarioSave');

Route::get('/admin/rutas/rutas', 'RutaController@rutas')->name('rutas');
Route::get('/rutas/index', 'RutaController@create')->name('rutaCreate');
Route::post('/rutas/create','RutaController@store')->name('rutaStore');

Route::get('/admin/rutas/visualizar/{id}', 'RutaController@show')->name('visualizar');