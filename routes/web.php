<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/pasien', function () {
    return view('pasien');
});

Route::get('/dokter', function () {
    return view('dokter');
});

Route::get('/perawat', function () {
    return view('perawat');
});

Route::get('/kamar', function () {
    return view('kamar');
});

Route::get('/obat', function () {
    return view('obat');
});

Route::get('/petugas_administrasi', function () {
    return view('petugas_administrasi');
});
