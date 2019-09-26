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

Route::get('/bienvenida', 'SitioController@bienvenida')->name('bienvenida');

Route::get('contacto', 'SitioController@contacto')->name('contacto');

Route::post('contacto-guardar', 'SitioController@guardaContacto')->name('guardar');

Route::get('ver-mensajes', 'SitioController@verMensajes')->name('ver-mensajes');
