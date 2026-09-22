<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KelasController;


// ================= HOME =================
Route::get('/', [HomeController::class, 'index'])
    ->name('home');


// ================= GALERI =================
// PUBLIK
Route::get('/galeri', [GaleriController::class, 'index'])
    ->name('galeri.index');


// BUTUH LOGIN
Route::middleware('auth')->group(function () {

    Route::get('/galeri/create', [GaleriController::class, 'create'])
        ->name('galeri.create');

    Route::post('/galeri', [GaleriController::class, 'store'])
        ->name('galeri.store');

    Route::get('/galeri/{galeri}/edit', [GaleriController::class, 'edit'])
        ->name('galeri.edit');

    Route::put('/galeri/{galeri}', [GaleriController::class, 'update'])
        ->name('galeri.update');

    Route::delete('/galeri/{galeri}', [GaleriController::class, 'destroy'])
        ->name('galeri.destroy');
});


// DETAIL GALERI
Route::get('/galeri/{galeri}', [GaleriController::class, 'show'])
    ->name('galeri.show');


// ================= KELAS =================
// PUBLIK
Route::get('/kelas', [KelasController::class, 'index'])
    ->name('kelas.index');


// BUTUH LOGIN
Route::middleware('auth')->group(function () {

    Route::get('/kelas/create', [KelasController::class, 'create'])
        ->name('kelas.create');

    Route::post('/kelas', [KelasController::class, 'store'])
        ->name('kelas.store');

    Route::get('/kelas/{kelas}/edit', [KelasController::class, 'edit'])
        ->name('kelas.edit');

    Route::put('/kelas/{kelas}', [KelasController::class, 'update'])
        ->name('kelas.update');

    Route::delete('/kelas/{kelas}', [KelasController::class, 'destroy'])
        ->name('kelas.destroy');
});


// ================= JURUSAN =================
// PUBLIK
Route::get('/jurusan', [JurusanController::class, 'index'])
    ->name('jurusan');


// BUTUH LOGIN
Route::middleware('auth')->group(function () {

    Route::get('/jurusan/create', [JurusanController::class, 'create'])
        ->name('jurusan.create');

    Route::post('/jurusan', [JurusanController::class, 'store'])
        ->name('jurusan.store');

    Route::get('/jurusan/{jurusan}/edit', [JurusanController::class, 'edit'])
        ->name('jurusan.edit');

    Route::put('/jurusan/{jurusan}', [JurusanController::class, 'update'])
        ->name('jurusan.update');

    Route::delete('/jurusan/{jurusan}', [JurusanController::class, 'destroy'])
        ->name('jurusan.destroy');
});


// DETAIL JURUSAN
Route::get('/jurusan/{jurusan}', [JurusanController::class, 'show'])
    ->name('jurusan.show');


// ================= EKSTRAKURIKULER =================

Route::get('/ekstrakurikuler', [EkstrakurikulerController::class, 'index'])
    ->name('ekstrakurikuler.index');

Route::middleware('auth')->group(function () {

    Route::get('/ekstrakurikuler/create', [EkstrakurikulerController::class, 'create'])
        ->name('ekstrakurikuler.create');

    Route::post('/ekstrakurikuler', [EkstrakurikulerController::class, 'store'])
        ->name('ekstrakurikuler.store');

    Route::get('/ekstrakurikuler/{ekstrakurikuler}/edit', [EkstrakurikulerController::class, 'edit'])
        ->name('ekstrakurikuler.edit');

    Route::put('/ekstrakurikuler/{ekstrakurikuler}', [EkstrakurikulerController::class, 'update'])
        ->name('ekstrakurikuler.update');

    Route::delete('/ekstrakurikuler/{ekstrakurikuler}', [EkstrakurikulerController::class, 'destroy'])
        ->name('ekstrakurikuler.destroy');
});


// ================= GURU =================
// PUBLIK
Route::get('/guru', [GuruController::class, 'index'])
    ->name('guru.index');


// BUTUH LOGIN
Route::middleware('auth')->group(function () {

    Route::get('/guru/create', [GuruController::class, 'create'])
        ->name('guru.create');

    Route::post('/guru', [GuruController::class, 'store'])
        ->name('guru.store');

    Route::get('/guru/{guru}/edit', [GuruController::class, 'edit'])
        ->name('guru.edit');

    Route::put('/guru/{guru}', [GuruController::class, 'update'])
        ->name('guru.update');

    Route::delete('/guru/{guru}', [GuruController::class, 'destroy'])
        ->name('guru.destroy');
});


// DETAIL GURU
Route::get('/guru/{guru}', [GuruController::class, 'show'])
    ->name('guru.show');


// ================= PROFIL =================
Route::get('/profil', [ProfilController::class, 'index'])
    ->name('profil');


// BUTUH LOGIN
Route::middleware('auth')->group(function () {

    Route::get('/profil/{id}/edit', [ProfilController::class, 'edit'])
        ->name('profil.edit');

    Route::put('/profil/{id}', [ProfilController::class, 'update'])
        ->name('profil.update');
});


// ================= SISWA =================
// PUBLIK
Route::get('/siswa', [SiswaController::class, 'index'])
    ->name('siswa.index');


// BUTUH LOGIN
Route::middleware('auth')->group(function () {

    Route::get('/siswa/create', [SiswaController::class, 'create'])
        ->name('siswa.create');

    Route::post('/siswa', [SiswaController::class, 'store'])
        ->name('siswa.store');

    Route::get('/siswa/{siswa}/edit', [SiswaController::class, 'edit'])
        ->name('siswa.edit');

    Route::put('/siswa/{siswa}', [SiswaController::class, 'update'])
        ->name('siswa.update');

    Route::delete('/siswa/{siswa}', [SiswaController::class, 'destroy'])
        ->name('siswa.destroy');
});


// DETAIL SISWA
Route::get('/siswa/{siswa}', [SiswaController::class, 'show'])
    ->name('siswa.show');


// ================= AUTH ADMIN =================

Route::get('/admin/login', [AuthController::class, 'showLoginForm'])
    ->name('login');

Route::post('/admin/login', [AuthController::class, 'login'])
    ->name('login.submit');

Route::post('/admin/logout', [AuthController::class, 'logout'])
    ->name('logout');

Route::get('/admin/dashboard', [AuthController::class, 'dashboard'])
    ->name('dashboard')
    ->middleware('auth');