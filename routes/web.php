<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PerawatController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PasienPostController;
use App\Http\Controllers\PetugasAdministrasiController;

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
    return view('home', [
        "title" => "Login"
        ]);
});

Route::resource('dokter', 'App\Http\Controllers\DokterController')->middleware('auth');
Route::post('/dokter/store', 'App\Http\Controllers\DokterController@store')->middleware('auth');
Route::get('/dokter/edit/{id_dokter}','App\Http\Controllers\DokterController@edit')->middleware('auth');
Route::post('/dokter/update','App\Http\Controllers\DokterController@update')->middleware('auth');
Route::get('/dokter/hapus/{id_dokter}','App\Http\Controllers\DokterController@destroy')->middleware('auth');

Route::resource('kamar', 'App\Http\Controllers\KamarController')->middleware('auth');
Route::post('/kamar/store', 'App\Http\Controllers\KamarController@store')->middleware('auth');
Route::get('/kamar/edit/{id_kamar}','App\Http\Controllers\KamarController@edit')->middleware('auth');
Route::post('/kamar/update','App\Http\Controllers\KamarController@update')->middleware('auth');
Route::get('/kamar/hapus/{id_kamar}','App\Http\Controllers\KamarController@destroy')->middleware('auth');

Route::resource('pasien', 'App\Http\Controllers\PasienController')->middleware('auth');
Route::post('/pasien/store', 'App\Http\Controllers\PasienController@store')->middleware('auth');
Route::get('/pasien/edit/{id_pasien}','App\Http\Controllers\PasienController@edit')->middleware('auth');
Route::post('/pasien/update','App\Http\Controllers\PasienController@update')->middleware('auth');
Route::get('/pasien/hapus/{id_pasien}','App\Http\Controllers\PasienController@destroy')->middleware('auth');


Route::resource('petugas_administrasi', 'App\Http\Controllers\PetugasAdministrasiController')->middleware('auth');
Route::post('/petugas_administrasi/store', 'App\Http\Controllers\PetugasAdministrasiController@store')->middleware('auth');
Route::get('/petugas_administrasi/edit/{id}','App\Http\Controllers\PetugasAdministrasiController@edit')->middleware('auth');
Route::post('/petugas_administrasi/update','App\Http\Controllers\PetugasAdministrasiController@update')->middleware('auth');
Route::get('/petugas_administrasi/hapus/{id}','App\Http\Controllers\PetugasAdministrasiController@destroy')->middleware('auth');


Route::get('/data_administrasi', function () {
    return view('data_administrasi', [
        "title" => "Data Administrasi"
    ]);
})->middleware('auth');

Route::get('/data_pembelian_obat', function () {
    return view('data_pembelian_obat', [
        "title" => "Data Pembelian Obat"
    ]);
})->middleware('auth');

Route::get('/data_pemeriksaan', function () {
    return view('data_pemeriksaan', [
        "title" => "Data Pemeriksaan"
    ]);
})->middleware('auth');



Route::get('/data_rawat_inap', function () {
    return view('data_rawat_inap', [
        "title" => "Data Rawat Inap"
    ]);
});


Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});


Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
