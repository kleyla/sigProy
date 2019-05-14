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
Route::get('/admin/conductores', 'ConductorController@conductores');
Route::get('/admin/micros', 'MicroController@micros');
Route::get('/admin/microNew', 'MicroController@microNew')->name('microNew');
Route::post('/admin/microSave', 'MicroController@microSave')->name('microSave');

