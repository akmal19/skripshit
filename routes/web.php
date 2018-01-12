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

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/fasilitas', 'FasilitasController@index')->name('fasilitas');
    Route::get('/fasilitas/create', 'FasilitasController@create')->name('fasilitas.create');
    Route::post('/fasilitas/create', 'FasilitasController@postCreate')->name('post.fasilitas.create');


    Route::get('/pengajuan', 'PengajuanController@index')->name('pengajuan');
    Route::get('/pengajuan/create', 'PengajuanController@create')->name('pengajuan.create');
});
