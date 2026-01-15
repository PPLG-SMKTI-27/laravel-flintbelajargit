<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\projectController;

Route::get('/', [projectController::class, 'Index']);

Route::get('/projects', function () {   
    return view('projects');
});

Route::get('/about', function () {   
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/index', function () {
    return view('index');
});

