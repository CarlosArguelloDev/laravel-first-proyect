<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

#Route::get('/', function () {
#    return view('index');
#});

Route::get('/', [HomeController::class, 'index']);

Route::get('/posts', [PostController::class, 'posts']);