<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;


Route::get('/', function () {
    return view('login');
});

Route::get('/pegawai', [pegawaicontroller::class, 'index']);
Route::get('/pegawai/create', [pegawaicontroller::class, 'create']);
Route::post('pegawai/', [pegawaicontroller::class, 'store']);
Route::get('pegawai/{id}', [pegawaicontroller::class, 'edit']);
Route::put('pegawai/{id}', [pegawaicontroller::class, 'update']);
Route::get('pegawai/delete/{id}', [pegawaicontroller::class, 'destroy']);
Route::delete('pegawai/{id}', [pegawaicontroller::class, 'destroy']);
// Route::get('/home', function () {
//     return view('landing.index');
// });

Route::get('/home', [pegawaicontroller::class, 'homepage']);

Route::get('/login','App\Http\Controllers\AuthController@index')->name('login');
Route::post('proses_login','App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('logout','App\Http\Controllers\AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth']],function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::get('admin','App\Http\Controllers\AdminController@index')->name('admin');
    });
    Route::group(['middleware' => ['cek_login:editor']], function () {
        Route::get('editor','App\Http\Controllers\EditorController@index')->name('editor');
    });
});

