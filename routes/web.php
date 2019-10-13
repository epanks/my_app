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

Route::get('/wilayah','BalaiController@wilayah_index');
Route::get('/wilayah/{id}','BalaiController@wilayah');
Route::get('/balai','BalaiController@index');
Route::get('/balai/{id}','BalaiController@satker');

Route::get('/satker','SatkerController@index');
Route::get('/satker/{id}','SatkerController@paket');

Route::get('/paket','PaketController@index');
Route::get('/paket/{id}','PaketController@paket');

Route::get('/desa','DesaController@index');