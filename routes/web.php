<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
    Route::get('/pegawai/add', [PegawaiController::class, 'create'])->name('pegawai.create');
    Route::post('/pegawai/add', [PegawaiController::class, 'store'])->name('pegawai.store');
    Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit'])->name('pegawai.edit');
    Route::put('/pegawai/edit/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');
    Route::delete('/pegawai/destroy/{id}', [PegawaiController::class, 'destroy'])->name('pegawai.destroy');

    Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
    Route::get('/kategori/add', [KategoriController::class, 'create'])->name('kategori.create');
    Route::post('/kategori/add', [KategoriController::class, 'store'])->name('kategori.store');
    Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
    Route::put('/kategori/edit/{id}', [KategoriController::class, 'update'])->name('kategori.update');
    Route::delete('/kategori/destroy/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
