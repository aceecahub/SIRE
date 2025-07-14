<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('page.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/karyawan', function () {
    return view('page.karyawan');
})->middleware(['auth', 'verified'])->name('karyawan');

// Pemasok route
Route::get('/pemasok', function () {
    return view('page.pemasok');
})->middleware(['auth', 'verified'])->name('pemasok');
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
