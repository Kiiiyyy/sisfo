<?php

use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\ProfileController;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Route;

Route::get('/user', [PenggunaController::class, 'index']);
Route::get('/user/tambah', [PenggunaController::class, 'create'])->name('user.tambah');



// Route::get('/user', function () {
//     return view('user.index');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
