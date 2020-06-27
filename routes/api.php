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

Route::group([
    'namespace' => 'Api'
], function () {

    /** 
     * AUTHORIZATION IF NEEDED
     */
    Route::post('/auth/login', 'UserController@login');
    Route::post('/auth/register', 'UserController@register');

    Route::get('/index', 'AdminController@index');
    Route::get('/mahasiswa', 'MahasiswaController@index')->name('mahasiswa');
    Route::get('/mahasiswa/detail/{id}', 'MahasiswaController@show');
    Route::post('/mahasiswa/update/{id}', 'MahasiswaController@update');
    Route::delete('/mahasiswa/delete/{id}', 'MahasiswaController@destroy');



    /** Code Route Below If Use Auth Token / Middleware */
    Route::group([
        'middleware' => 'auth:api'
    ], function () {
        // Route::get('/index', 'AdminController@index');
        // Route::get('/mahasiswa', 'MahasiswaController@index')->name('mahasiswa');
        // Route::get('/mahasiswa/detail/{id}', 'MahasiswaController@show');
        // Route::post('/mahasiswa/update/{id}', 'MahasiswaController@update');
        // Route::delete('/mahasiswa/delete/{id}', 'MahasiswaController@destroy');
        
    });
});




