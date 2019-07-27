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

Route::group(['prefix' => '/aplication'], function(){
    Route::get('/', 'UsersController@mostrar');
    Route::get('/new_user', 'UsersController@formCadastro');
    Route::post('/cadastrar', 'UsersController@cadastro');
    Route::get('/{id}/form_editar', 'UsersController@formEditar');
    Route::post('/{id}/edit', 'UsersController@editar');
    Route::get('/{id}/excluir', 'UsersController@excluir');
});
