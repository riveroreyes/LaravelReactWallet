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

Route::group(['middleware' => ['auth']], function(){
	Route::get('/clientesAuth/index','OauthClientsController@index')->name('menuClienteApi');
	Route::get('/clientesAuth/clientesAuth', 'OauthClientsController@create' )->name('crearClienteApi');
	Route::get('/clientesAuth/listado','OauthClientsController@listado')->name('listarClienteApi');
});

