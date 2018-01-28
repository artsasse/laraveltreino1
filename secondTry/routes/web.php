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

/*Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/

/*Route::get('/silk', 'UsuarioController@inicial')->name('SilkGetter');
Route::post('/silk', 'UsuarioController@store')->name('SilkRoad');*/

Route::get('contato', 'ContatoController@create')->name('contato.create');
Route::post('contato', 'ContatoController@store')->name('contato.store');
Route::get('teste', function(){
  return view('testanu');
});
