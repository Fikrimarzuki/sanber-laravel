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

Route::get('/', 'BukuController@soal1');
Route::get('/buku', 'BukuController@index');
Route::get('/buku/create', 'BukuController@create');
Route::post('/buku', 'BukuController@store');
Route::get('/buku/{id}', 'BukuController@show');
Route::get('/buku/{id}/edit', 'BukuController@edit');
Route::put('/buku/{id}', 'BukuController@update');
Route::delete('/buku/{id}', 'BukuController@destroy');
