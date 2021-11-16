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
