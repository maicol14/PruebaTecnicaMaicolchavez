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
Route::get('/Prueba','PruebainterwapController@index');
Route::get('/Prueba/create', 'PruebainterwapController@create');

Route::get('/Prueba/editar/', 'PruebainterwapController@editar');

Route::get('/Prueba/editar/', function () {
    return view('Prueba.editar');
});
 
Route:: resource('Prueba','PruebainterwapController');
