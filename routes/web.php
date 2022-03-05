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

Route::get('/detalle', [
    'uses' => 'myController@detalle',
    'as' => 'detalle.tiempo'
]);

Route::get('/redirigir', 'myController@redirigir');

Route::get('/', 'myController@formulario');

Route::post('/recibir', 'myController@recibir');

Route::resource('usuario', 'usuarioController');

