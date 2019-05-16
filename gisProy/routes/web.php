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
