<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

// Route Halaman Utama & Katalog Film
Route::get('/', [MovieController::class, 'index']);
Route::get('/movies', [MovieController::class, 'index']);

// Route Halaman Detail Film
Route::get('/movies/{id}', [MovieController::class, 'show'])->name('movies.show');