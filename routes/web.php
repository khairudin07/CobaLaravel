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

// Route::group(['prefix' => 'daftar-siswa'], function () {
//     Route::get('/','DaftarSiswa@semua');
//     Route::get('/6A','DaftarSiswa@kelas6a');
//     Route::get('/6B','DaftarSiswa@kelas6b');
//     Route::get('/6C','DaftarSiswa@kelas6c');
//     Route::get('/6D','DaftarSiswa@kelas6d');
//     Route::get('/{kelas}','DaftarSiswa@pilihkelas');
//     Route::get('/{class}','DaftarSiswa@inputkelas');
    
// });
Route::get('/daftar-siswa/{kelas?}','DaftarSiswa@index');
