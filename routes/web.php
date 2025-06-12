<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [HelloController::class , "hello"]);

Route::get('/blog', [BlogController::class, 'blog'])->name('blog');

Route::get('/about', [AboutController::class, 'about'])->name('about');

