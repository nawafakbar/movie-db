<?php

use App\Http\Controller\MoviesController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MoviesController::class, 'index']);
