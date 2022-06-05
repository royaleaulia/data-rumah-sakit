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
    return view('login.index', [
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

Route::get('/dokter', function () {
    return view('dokter', [
        "title" => "Dokter"
    ]);
})->middleware('auth');

Route::get('/create_dokter', function () {
    return view('create_dokter', [
        "title" => "Create_Dokter"
    ]);
})->middleware('auth');

Route::get('/perawat', function () {
    return view('perawat', [
        "title" => "Perawat"
    ]);
})->middleware('auth');

Route::get('/kamar', function () {
    return view('kamar', [
        "title" => "Kamar"
    ]);
})->middleware('auth');

Route::get('/obat', function () {
    return view('obat', [
        "title" => "Obat"
    ]);
})->middleware('auth');

Route::get('/petugas_administrasi', function () {
    return view('petugas_administrasi', [
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
})->middleware('auth');


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/pasien', [PasienController::class, 'index'])->middleware('auth');
Route::get('/dokter', [DokterController::class, 'index'])->middleware('auth');
Route::get('/perawat', [PerawatController::class, 'index'])->middleware('auth');
Route::get('/kamar', [KamarController::class, 'index'])->middleware('auth');
Route::get('/obat', [ObatController::class, 'index'])->middleware('auth');
Route::get('/petugas_administrasi', [PetugasAdministrasiController::class, 'index'])->middleware('auth');