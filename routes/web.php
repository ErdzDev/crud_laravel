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

Route::group(['middleware' => 'web'], function(){
Route::get('/', 'HomeController@index');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
});

Route::get('/usuarios', 'UsuariosController@usuarios')->name('usuarios');
Route::get('/usuarios/new', 'UsuariosController@new')->name('new');
Route::post('/usuarios/add', 'UsuariosController@add')->name('add');
Route::get('/usuarios/{id}/edit', 'UsuariosController@edit')->name('edit');
Route::post('/usuarios/{id}/update', 'UsuariosController@update')->name('update');
Route::delete('/usuarios/{id}/delete', 'UsuariosController@delete')->name('delete');