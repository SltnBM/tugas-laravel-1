<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\RakController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/master', [MasterController::class, 'master'])->name('master');
Route::get('/', [MasterController::class, 'content'])->name('index')->middleware('auth');
Route::resource('/buku', BukuController::class)->middleware('auth');
Route::resource('/rak', RakController::class)->middleware('auth');
Route::resource('/anggota', AnggotaController::class)->middleware('auth');
Route::resource('/petugas', PetugasController::class)->middleware('auth');
Route::resource('/peminjaman', PeminjamanController::class)->middleware('auth');
Route::resource('/pengembalian', PengembalianController::class)->middleware('auth');

Route::controller(AuthController::class)->group(function() {
    Route::get('/registration', 'register')->name('auth.register');
    Route::post('/store', 'store')->name('auth.store');
    Route::get('/login', 'login')->name('auth.login');
    Route::post('/auth', 'authentication')->name('auth.authentication');
    Route::get('/dashboard', 'dashboard')->name('auth.dashboard');
    Route::post('/logout', 'logout')->name('auth.logout');
});

Route::get('/profile/{user}', [ProfilesController::class, 'show'])->name('user.profile')->middleware('auth');
