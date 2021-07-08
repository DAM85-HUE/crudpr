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
//listado de usuarios 
Route::get('/', 'UserController@list');
//formaulario
Route::get('/form', 'userController@userform');
//guardar /registrar usuarios
Route::post('/form', 'userController@save')->name('save');

//eliminar
Route::delete('/delete/{id}','UserController@delete')->name('delete');

//formulario actualizar 

Route::get('/editform/{id}','UserController@editform')->name('editform');
//Edición de usuarios
Route::patch('/edit/{id}','UserController@edit')->name('edit');
