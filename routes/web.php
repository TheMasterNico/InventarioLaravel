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
Route::view('/agregar', 'add', ['objetos' => App\Objeto::latest()->get()])->name('add');
Route::view('/almacenar', 'almacenar', ['objetos' => App\Objeto::latest()->get()])->name('almacenar');
Route::get('/buscar', 'SearchController')->name('search');
Route::get('/buscar/last/{id}', 'SearchController@show')->name('search.last');
Route::post('buscar', 'SearchController@showPost')->name('search.post');


Route::post('agregar', 'AddItemController@store')->name('add.store');
