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

//update DB
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');

//delete DB
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
