<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

// Route untuk halaman utama
Route::get('/', function () {
    return view('portfolio');
});

// Route untuk halaman about
Route::get('/about', function () {
    return view('about');
});

// Route untuk halaman contact
Route::get('/contact', function () {
    return view('contact');
});

// Route untuk projects menggunakan Controller
Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('projects.show');

Route::get('/index', function () {
    return view('index');
});
