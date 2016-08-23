<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('teste', function(){
	return "Olá Mundo";
});

Route::get('pagina', 'CtrlTeste@index');
Route::get('home','CtrlTeste@home');
Route::get('msg/{msg}', 'CtrlTeste@msg');
Route::get('msg1/{msg}', 'CtrlTeste@msg1');
Route::get('pgmsg/{msg}', 'CtrlTeste@msggeral');
Route::get('dados_pessoa', 'CtrlTeste@mostra_dados_pessoa');
Route::get('dados_func','CtrlTeste@mostra_dados_func');
Route::get('anotações', 'CtrlTeste@mostra_anotacao');
Route::get('Login','CtrlLogin@mostra_login');