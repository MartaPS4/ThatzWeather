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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/detalle','myController@detalle')->name('myController.detalle');

Route::get('/redirigir', 'myController@redirigir')->name('myController.redirigir');

Route::get('/', 'myController@formulario')->name('myController.formulario');

Route::post('/recibir', 'myController@recibir')->name('myController.recibir');

Route::resource('usuario', 'usuarioController');

