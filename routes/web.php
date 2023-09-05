<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PetugasController;

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

Route::get('/', function () {
    return view('template.master');
})->name('master');

// Route::get('/', [AuthorController::class, 'index'])->name('index');
Route::get('/anggota', [AnggotaController::class, 'create'])->name('anggota');
Route::get('/buku', [BukuController::class, 'create'])->name('buku');
Route::get('/petugas', [PetugasController::class, 'create'])->name('petugas');
