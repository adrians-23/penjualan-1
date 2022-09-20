<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    KelasController,
    SiswaController,
    MapelController,
    GuruController
}; 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route halaman utama
Route::resource('/', HomeController::class);

//route kelas
Route::resource('/kelas', KelasController::class);
Route::get('/kelas/edit/{id}', [KelasController::class, 'edit']);
Route::get('/kelas/hapus/{id}', [KelasController::class, 'destroy']);

//route siswa
Route::resource('/siswa', SiswaController::class);
Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit']);
Route::get('/siswa/hapus/{id}', [SiswaController::class, 'destroy']);

//route mapel
Route::resource('/mapel', MapelController::class);
Route::get('/mapel/edit/{id}', [MapelController::class, 'edit']);
Route::get('/mapel/hapus/{id}', [MapelController::class, 'destroy']);

//route guru
Route::resource('/guru', GuruController::class);
Route::get('/guru/edit/{id}', [GuruController::class, 'edit']);
Route::get('/guru/hapus/{id}', [GuruController::class, 'destroy']);