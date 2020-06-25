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

Route::get('/index', 'AdminController@index');
Route::get('/mahasiswa', 'MahasiswaController@index')->name('mahasiswa');
Route::get('/mahasiswa/detail/{id}', 'MahasiswaController@show');
Route::get('/mahasiswa/edit/{id}', 'MahasiswaController@edit');
Route::get('/mahasiswa/update/{id}', 'MahasiswaController@update');
Route::get('/mahasiswa/delete/{id}', 'MahasiswaController@destroy');
