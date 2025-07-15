<?php

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

// Karyawan route
Route::get('/karyawan', [KaryawanController::class, 'index']);


// Pemasok route
Route::get('/pemasok', [PemasokController::class, 'index']);
// Barang route
Route::get('/barang', function () {
    return view('page.barang');
})->middleware(['auth', 'verified'])->name('barang');

Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
