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
    Route::get('/', function () {
        return redirect()->route('home');
    });
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/ruangan', 'RuanganController@index')->name('ruangan');
    Route::get('/ruangan/update/{id}', 'RuanganController@update')->name('ruangan.update');
    Route::put('/ruangan/update/{id}', 'RuanganController@putUpdate')->name('ruangan.put');
    Route::get('/ruangan/create', 'RuanganController@create')->name('ruangan.create');
    Route::post('/ruangan/create', 'RuanganController@postCreate')->name('post.ruangan.create');
    Route::delete('/ruangan/delete/{id}', 'RuanganController@destroy')->name('post.ruangan.destroy');

    Route::get('/fasilitas', 'FasilitasController@index')->name('fasilitas');
    Route::get('/fasilitas/create', 'FasilitasController@create')->name('fasilitas.create');
    Route::post('/fasilitas/create', 'FasilitasController@postCreate')->name('post.fasilitas.create');
    Route::delete('/fasilitas/delete/{id}', 'FasilitasController@destroy')->name('post.fasilitas.destroy');

    Route::get('/pengajuan', 'PengajuanController@index')->name('pengajuan');
    Route::get('/pengajuan/create', 'PengajuanController@create')->name('pengajuan.create');
    Route::post('/pengajuan/create', 'PengajuanController@postCreate')->name('post.pengajuan.create');
    Route::post('/pengajuan/ajukan', 'PengajuanController@ajukan')->name('post.re.pengajuan');
    Route::get('/pengajuan/edit/{id}', 'PengajuanController@edit')->name('edit.pengajuan');
    Route::put('/pengajuan/edit/{id}', 'PengajuanController@putEdit')->name('put.pengajuan');
    Route::delete('/pengajuan/delete/{id}', 'PengajuanController@destroy')->name('post.pengajuan.destroy');

    Route::get('manage/pengajuan', 'ManagePengajuanController@index')->name('manage.pengajuan');
    Route::post('manage/pengajuan', 'ManagePengajuanController@post')->name('post.manage.pengajuan');

    Route::get('/peminjaman', 'PeminjamanController@index')->name('peminjaman');
    Route::get('/peminjaman/create', 'PeminjamanController@create')->name('peminjaman.create');
    Route::post('/peminjaman/create', 'PeminjamanController@postCreate')->name('post.peminjaman.create');
    Route::delete('/peminjaman/delete/{id}', 'PeminjamanController@destroy')->name('post.peminjaman.destroy');

    Route::get('manage/peminjaman', 'ManagePeminjamanController@index')->name('manage.peminjaman');
    Route::post('manage/peminjaman', 'ManagePeminjamanController@post')->name('post.manage.peminjaman');

    Route::get('/inventaris', 'InventarisController@index')->name('inventaris');
    Route::get('/inventaris/create', 'InventarisController@create')->name('inventaris.create');
    Route::post('/inventaris/create', 'InventarisController@postCreate')->name('post.inventaris.create');
});
