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

Route::get('/noticias', '\App\Http\Controllers\NoticiaController@index')->name('noticias.index');
Route::get('/noticias/importar', '\App\Http\Controllers\NoticiaController@importar')->name('noticias.importar');
