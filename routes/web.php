<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;

// Route::get('/', [HelloController::class , "hello"]);

Route::get('/blog', [BlogController::class, 'blog']);

