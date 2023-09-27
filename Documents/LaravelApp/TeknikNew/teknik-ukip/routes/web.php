<?php

use App\Http\Controllers\DaftarAlatLabController;
use App\Http\Controllers\DaftarAlatLabsElektroController;
use App\Http\Controllers\JadwalPraktikumElektroController;
use App\Http\Controllers\JadwalPraktikumSipilController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MhsElektroController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MhsSipilController;
use App\Http\Controllers\ModulElektroController;
use App\Http\Controllers\ModulSipilController;
use App\Http\Controllers\NamaLabController;
use App\Http\Controllers\NamaLabElektroController;
use App\Http\Controllers\PelaksanaLabsController;
use App\Http\Controllers\PercobaanElektroController;
use App\Http\Controllers\RegisterController;


Route::get('/', function () {
    return view('dashboard.dashboard');
});
Route::get('/sipil/daftar_akun', function () {
    return view('sipil.akun.daftar_akun');
});


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::prefix('elektro')->controller(ModulElektroController::class)->group(function () {
    Route::get('/modul', 'index');
    Route::post('/upload_endpoint', 'store');
    Route::get('/download/{id}', 'download');
});

Route::prefix('sipil')->controller(ModulSipilController::class)->group(function () {
    Route::get('/modul', 'index');
    Route::post('/upload_endpoint', 'store');
    Route::get('/download/{id}', 'download');
});

Route::prefix('elektro')->controller(DaftarAlatLabsElektroController::class)->group(function () {
    Route::get('/daftar_alat', 'index');
    Route::post('/save_daftar_alat', 'store');
    Route::delete('/hapus_daftar_alat/{id}', 'destroy');
    // Route::get('/edit/{id }', 'edit')->name("edit_mhs_sipil");
    // Route::put('/update', 'update');
});

Route::prefix('elektro')->controller(PercobaanElektroController::class)->group(function () {
    Route::get('/percobaan', 'index');
    Route::get('/get_name_percobaan', 'get_name_percobaan');
    Route::post('/save_percobaan', 'store')->name("save_nama_percobaan");
    Route::delete('/hapus_nama_percobaan/{id}', 'destroy');
    // Route::get('/edit/{id }', 'edit')->name("edit_mhs_sipil");
    // Route::put('/update', 'update');
});

Route::prefix('elektro')->controller(NamaLabElektroController::class)->group(function () {
    Route::get('/laboratorium', 'index');
    Route::get('/get_name_labs', 'get_name_labs');
    Route::post('/save_nama_labs', 'store')->name("save_nama_labs");
    Route::delete('/hapus_nama_labs/{id}', 'destroy');
    // Route::get('/edit/{id }', 'edit')->name("edit_mhs_sipil");
    // Route::put('/update', 'update');
});



Route::prefix('elektro')->controller(MhsElektroController::class)->group(function () {
    Route::get('/data_mahasiswa', 'index');
    Route::post('/save_mhs', 'store');
    Route::get('/edit/{id}', 'edit');
    Route::put('/mhs_update', 'update');
    Route::delete('/hapus_mhs/{id}', 'destroy');
});

Route::prefix('elektro')->controller(JadwalPraktikumElektroController::class)->group(function () {
    Route::get('/jadwal_praktikum', 'index');
    Route::post('/save_praktikum', 'store');
    Route::delete('/hapus_praktikum/{id}', 'destroy');
});


Route::prefix('sipil')->controller(JadwalPraktikumSipilController::class)->group(function () {
    Route::get('/jadwal_praktikum', 'index');
    Route::post('/save_praktikum', 'store');
    Route::delete('/hapus_praktikum/{id}', 'destroy');
    // Route::get('/edit/{id }', 'edit')->name("edit_mhs_sipil");
    // Route::put('/update', 'update');
});

Route::prefix('sipil')->controller(PelaksanaLabsController::class)->group(function () {
    Route::get('/pelaksana_labs', 'index');
    Route::post('/save_pelaksana_labs', 'store');
    Route::delete('/hapus_pelaksana_labs/{id}', 'destroy');
    // Route::get('/edit/{id }', 'edit')->name("edit_mhs_sipil");
    // Route::put('/update', 'update');
});

Route::prefix('sipil')->controller(DaftarAlatLabController::class)->group(function () {
    Route::get('/daftar_alat', 'index');
    Route::post('/save_daftar_alat', 'store')->name("save_nama_labs");
    Route::delete('/hapus_daftar_alat/{id}', 'destroy');
    // Route::get('/edit/{id }', 'edit')->name("edit_mhs_sipil");
    // Route::put('/update', 'update');
});

Route::prefix('sipil')->controller(NamaLabController::class)->group(function () {
    Route::get('/laboratorium', 'index');
    Route::get('/get_name_labs', 'get_name_labs');
    Route::post('/save_nama_labs', 'store')->name("save_nama_labs");
    Route::delete('/hapus_nama_labs/{id}', 'destroy');
    // Route::get('/edit/{id }', 'edit')->name("edit_mhs_sipil");
    // Route::put('/update', 'update');
});

Route::prefix('sipil')->controller(MhsSipilController::class)->group(function () {
    Route::get('/data_mahasiswa', 'index');
    Route::post('/save', 'store')->name("save_mhs_sipil");
    Route::get('/edit/{id}', 'edit')->name("edit_mhs_sipil");
    Route::delete('/hapus_mhs/{id}', 'destroy');
    Route::put('/update', 'update');
});


// Route::controller(MhsSipilController::class)->group(function () {
//     Route::get('/sipil/data_mahasiswa', 'index');
// });