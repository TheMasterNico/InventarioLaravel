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

Route::view('/', 'welcome', ['objetos' => App\Objeto::latest()->get()])->name('home');
Route::get('/agregar', 'ObjectController@create')->name('add');


//Route::get('/agregar/{id}/editar', 'ObjectController@update')->name('search.last');

Route::get('/registros', 'RegistroController@index')->name('registros');

Route::get('/buscar', 'ObjectController@index')->name('search');
Route::get('/buscar/{id}', 'ObjectController@show')->name('search.last');
Route::post('/buscar', 'SearchController@showPost')->name('search.post');

Route::patch('/editar/{objeto}', 'ObjectController@update')->name('editar.update');
Route::get('/editar/{objeto}', 'ObjectController@edit')->name('editar.edit');

Route::patch('/almacenar/{objeto}', 'ObjectController@agregar')->name('almacenar.update');
Route::get('/almacenar/{objeto}', 'ObjectController@almacenar')->name('almacenar.edit');

Route::post('agregar', 'ObjectController@store')->name('add.store');
