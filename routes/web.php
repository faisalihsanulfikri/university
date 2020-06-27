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
Auth::routes();

Route::get('/', 'AdminController@index')->name('home');
Route::get('/index', 'AdminController@index');
Route::get('/mahasiswa', 'MahasiswaController@index')->name('mahasiswa');
Route::get('/mahasiswa/detail/{id}', 'MahasiswaController@show');
Route::get('/mahasiswa/edit/{id}', 'MahasiswaController@edit');
Route::post('/mahasiswa/update/{id}', 'MahasiswaController@update');
Route::get('/mahasiswa/delete/{id}', 'MahasiswaController@destroy');
