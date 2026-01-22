<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

// Route untuk halaman utama menggunakan Controller
Route::get('/', [ProjectController::class, 'portfolio'])->name('home');

// Route untuk halaman about
Route::get('/about', function () {
    return view('about');
})->name('about');

// Route untuk halaman contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Route untuk projects menggunakan Controller
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('projects.show');

// Route testing (opsional)
Route::get('/index', function () {
    return view('index');
});