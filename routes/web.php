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

Route::get('/pasien', function () {
    return view('pasien', [
        "title" => "Pasien"
        ]);
})->middleware('auth');

Route::get('/create_pasien', function () {
    return view('create_pasien', [
        "title" => "Create_Pasien"
        ]);
})->middleware('auth');


Route::resource('dokter', 'App\Http\Controllers\DokterController');
Route::post('/dokter/store', 'App\Http\Controllers\DokterController@store');
Route::get('/dokter/edit/{id_dokter}','App\Http\Controllers\DokterController@edit');
Route::post('/dokter/update','App\Http\Controllers\DokterController@update');
Route::get('/dokter/hapus/{id_dokter}','App\Http\Controllers\DokterController@destroy');

Route::get('/perawat', function () {
    return view('perawat', [
    ]);
})->middleware('auth');

Route::get('/create_perawat', function () {
    return view('create_perawat', [
        "title" => "Perawat"
    ]);
})->middleware('auth');

Route::get('/kamar', function () {
    return view('kamar', [
    ]);
})->middleware('auth');

Route::get('/create_kamar', function () {
    return view('create_kamar', [
        "title" => "Create_Kamar"
    ]);
})->middleware('auth');

Route::get('/obat', function () {
    return view('obat', [
    ]);
})->middleware('auth');

Route::get('/create_obat', function () {
    return view('create_obat', [
        "title" => "Obat"
    ]);
})->middleware('auth');

Route::get('/petugas_administrasi', function () {
    return view('petugas_administrasi', [
    ]);
})->middleware('auth');

Route::get('/create_petugas_administrasi', function () {
    return view('create_petugas_administrasi', [
        "title" => "Petugas Administrasi"
    ]);
})->middleware('auth');

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

Route::get('/pasien', [PasienController::class, 'index'])->middleware('auth');
Route::post('pasien/tambah', [PasienController::class, 'store'])->name('simpanpasien')->middleware('auth');

Route::post('dokter/tambah', [DokterController::class, 'store'])->name('simpandokter')->middleware('auth');

Route::get('/perawat', [PerawatController::class, 'index'])->middleware('auth');
Route::post('perawat/tambah', [PerawatController::class, 'store'])->name('simpanperawat')->middleware('auth');

Route::get('/kamar', [KamarController::class, 'index'])->middleware('auth');
Route::post('kamar/tambah', [KamarController::class, 'store'])->name('simpankamar')->middleware('auth');

Route::get('/obat', [ObatController::class, 'index'])->middleware('auth');
Route::post('obat/tambah', [ObatController::class, 'store'])->name('simpanobat')->middleware('auth');

Route::get('/petugas_administrasi', [PetugasAdministrasiController::class, 'index'])->middleware('auth');
Route::post('petugas_administrasi/tambah', [PetugasAdministrasiController::class, 'store'])->name('simpanpetugas')->middleware('auth');