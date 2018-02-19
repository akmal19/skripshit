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
    Route::post('/pengajuan/create', 'PengajuanController@postCreate')->name('post.pengajuan.create');
    Route::post('/pengajuan/ajukan', 'PengajuanController@ajukan')->name('post.re.pengajuan');
    Route::get('/pengajuan/edit/{id}', 'PengajuanController@edit')->name('edit.pengajuan');
    Route::put('/pengajuan/edit/{id}', 'PengajuanController@putEdit')->name('put.pengajuan');

    Route::get('manage/pengajuan', 'ManagePengajuanController@index')->name('manage.pengajuan');
    Route::post('manage/pengajuan', 'ManagePengajuanController@post')->name('post.manage.pengajuan');

    Route::get('/peminjaman', 'PeminjamanController@index')->name('peminjaman');
    Route::get('/peminjaman/create', 'PeminjamanController@create')->name('peminjaman.create');
    Route::post('/peminjaman/create', 'PeminjamanController@postCreate')->name('post.peminjaman.create');

    Route::get('manage/peminjaman', 'ManagePeminjamanController@index')->name('manage.peminjaman');
    Route::post('manage/peminjaman', 'ManagePeminjamanController@post')->name('post.manage.peminjaman');

    Route::get('/inventaris', 'InventarisController@index')->name('inventaris');
    Route::get('/inventaris/create', 'InventarisController@create')->name('inventaris.create');
    Route::post('/inventaris/create', 'InventarisController@postCreate')->name('post.inventaris.create');
});
