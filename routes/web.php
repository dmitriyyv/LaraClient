<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;

Auth::routes();

Route::get('/', [HomeController::class, 'index']);

Route::get('/movies', [MovieController::class, 'showAllMovies']);

Route::get('/movie/{id}', [MovieController::class, 'showSingleMovie']);
