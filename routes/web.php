<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

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
Route::get('/pasien','pasienController@index')->name('pasien');
Route::get('/create_pasien', 'pasienController@create')->name('create_pasien');
Route::post('/save_pasien', 'pasienController@store')->name('simpan_pasien');


Route::get('/', function () {
    return view('pasien', [
        "title" => "Pasien"
        ]);
});

Route::get('/pasien', function () {
    return view('pasien', [
        "title" => "Pasien"
        ]);
});
Route::get('/create_pasien', function () {
    return view('create_pasien', [
        "title" => "Create_Pasien"
        ]);
});
Route::get('/dokter', function () {
    return view('dokter', [
        "title" => "Dokter"
    ]);
});
Route::get('/create_dokter', function () {
    return view('create_dokter', [
        "title" => "Create_Dokter"
    ]);
});

Route::get('/perawat', function () {
    return view('perawat', [
        "title" => "Perawat"
    ]);
});

Route::get('/kamar', function () {
    return view('kamar', [
        "title" => "Kamar"
    ]);
});

Route::get('/obat', function () {
    return view('obat', [
        "title" => "Obat"
    ]);
});

Route::get('/petugas_administrasi', function () {
    return view('petugas_administrasi', [
        "title" => "Petugas Administrasi"
    ]);
});


Route::get('/data_administrasi', function () {
    return view('data_administrasi', [
        "title" => "Data Administrasi"
    ]);
});

Route::get('/data_pembelian_obat', function () {
    return view('data_pembelian_obat', [
        "title" => "Data Pembelian Obat"
    ]);
});

Route::get('/data_pemeriksaan', function () {
    return view('data_pemeriksaan', [
        "title" => "Data Pemeriksaan"
    ]);
});

Route::get('/data_rawat_inap', function () {
    return view('data_rawat_inap', [
        "title" => "Data Rawat Inap"
    ]);
});
