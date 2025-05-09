<?php

use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
//Route::get('/', [MoviesController::class, 'index']);

Route::resource('/', MoviesController::class);