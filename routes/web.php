<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AuthController;

// Route untuk halaman utama
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

// Route untuk login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// Route untuk logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Route testing
Route::get('/index', function () {
    return view('index');
});