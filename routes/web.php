<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PemasokController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('page.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/transaksi', function () {
    return view('page.transaksi');
})->middleware(['auth', 'verified'])->name('transaksi');

// Karyawan route
Route::resource('/karyawan', KaryawanController::class);

// Pemasok route
Route::resource('/pemasok', PemasokController::class);

// Pemasok route
Route::resource('/barang', BarangController::class);



Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
