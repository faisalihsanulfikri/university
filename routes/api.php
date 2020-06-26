<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/index', 'Api\AdminController@index');

Route::get('/mahasiswa', 'Api\MahasiswaController@index')->name('mahasiswa');
Route::get('/mahasiswa/detail/{id}', 'Api\MahasiswaController@show');
Route::post('/mahasiswa/update/{id}', 'Api\MahasiswaController@update');
Route::delete('/mahasiswa/delete/{id}', 'Api\MahasiswaController@destroy');
