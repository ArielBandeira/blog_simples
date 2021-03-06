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

Route::resource('artigo', 'ArtigoController');

Route::resource('autor', 'AutorController');

Route::resource('home', 'HomeController');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home/artigo/{id}', 'HomeController@artigo')->name('artigo');

Route::get('/sobremim', 'HomeController@sobreMim')->name('sobreMim');

Route::get('/contato', 'HomeController@contato')->name('contato');
