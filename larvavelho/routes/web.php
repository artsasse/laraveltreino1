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
/*
Route::get('/testanu/{alfa}/{beta}/{cama}', function ($alfa,$beta,$cama) {
    return view('welcome', [
      'alfa'=>$alfa,
      'beta'=>$beta,
      'cama'=>$cama,
    ]);
});

Route::get('/goodbye', function () {
    return view('goodbye');
});

Route::get('/wait', function () {
    return view('ejcm.wait');
});

Route::get('/ola', function(){
    return "Olá EJCM!!!";
});

Route::get('/servicos/{id}', function ($id) {
    return "O serviço do ".$id." é muito bom.<br><br>
Gostou?<a href='https://github.com/'> Esse é o contato dele.</a>";
});

Route::get('/servicos2/{nome}/{cpf}/{rg}/{cep}', function ($nome,$cpf,$rg,$cep) {
    return "Voce se chama ".$nome.".<br>
    Seu CPF eh ".$cpf.".<br>
    Seu RG eh ".$rg.".<br>
    Seu CEP eh ".$cep.".<br>";
});

Route::get('servicos2/{nome}', function ($nome) {
    return "Voce se chama ".$nome.".<br>";
});

Route::get('servicos2/{nome}/{cpf}', function ($nome,$cpf) {
    return "Voce se chama ".$nome.".<br>
    Seu CPF eh ".$cpf.".<br>";
});

Route::get('servicos2/{nome}/{cpf}/{rg}', function ($nome,$cpf,$rg) {
    return "Voce se chama ".$nome.".<br>
    Seu CPF eh ".$cpf.".<br>
    Seu RG eh ".$rg.".<br>";
});*/

Route::get('/{p1}/{p2}', 'ExemploController@recebeParametro');
