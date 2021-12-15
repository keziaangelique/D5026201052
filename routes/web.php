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

//route untuk file blade
Route::get('tugas4', function () {
    return view('tugas4js') ;
});

//tambahin file blade buat praktikum 2
Route::get('praktikum2', function () {
    return view('praktikum2js') ;
});

//melalui controller
Route::get('ets2021',"ViewController@showETS");

//file yang menggunakan method post
Route::get('glbb',"ViewController@showGLBB");
Route::post('hasil',"ViewController@liatHasil") ;

//route CRUD
Route::get('/pegawai','PegawaiController@index');

//input DB
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');

//view DB
Route::get('/pegawai/detail/{id}','PegawaiController@view');

//update DB
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');

//delete DB
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');

//Searching
Route::get('/pegawai/cari','PegawaiController@cari');

//route CRUD Mutasi
Route::get('/mutasi','MutasiController@indexmutasi');

Route::get('/mutasi/add','MutasiController@add');
Route::post('/mutasi/save','MutasiController@save');
Route::get('/mutasi/detail/{id}','MutasiController@view');
Route::get('/mutasi/ubah/{id}','MutasiController@ubah');
Route::post('/mutasi/unggah','MutasiController@unggah');

Route::get('/mutasi/clear/{id}','MutasiController@clear');

Route::get('/mutasi/cari','MutasiController@cari');

//CRUD Absen
Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::get('/absen/detail/{id}','AbsenController@view');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');
Route::get('/absen/cari','AbsenController@cari');

//route CRUD hewan
Route::get('/hewan','HewanController@index');
Route::get('/hewan/tambah','HewanController@tambah');
Route::post('/hewan/store','HewanController@store');
Route::get('/hewan/detail/{id}','HewanController@view');
Route::get('/hewan/edit/{id}','HewanController@edit');
Route::post('/hewan/save','HewanController@save');
Route::get('/hewan/delete/{id}','HewanController@delete');
Route::get('/hewan/cari','HewanController@cari');

//CRUD Nilai Kuliah
Route::get('/nilaikuliah','NilaiController@index');
Route::get('/nilaikuliah/tambah','NilaiController@tambah');
Route::post('/nilaikuliah/store','NilaiController@store');
