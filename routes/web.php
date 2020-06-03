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

/**
 * Pagina principal
 */
Route::get('/', 'HomeController@index')->name('index');
Route::get('/prueba', 'HomeController@prueba')->name('prueba');
Route::get('/kitdigital', 'HomeController@digital')->name('kitdigital');
Route::get('/articulo/{id}', 'SiteController@index')->name('site');