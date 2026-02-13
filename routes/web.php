<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Route untuk halaman utama (portfolio)
Route::get('/', [ProjectController::class, 'portfolio'])->name('home');

// Route untuk halaman about
Route::get('/about', function () {
    return view('about');
})->name('about');

// Route untuk halaman contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Route untuk projects
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('projects.show');

// Route untuk dashboard (hanya untuk yang sudah login)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route untuk profile (Breeze)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// INI WAJIB ADA! Include auth routes dari Breeze
require __DIR__.'/auth.php';