<?php

use App\Http\Controllers\MoviesController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
//Route::get('/', [MoviesController::class, 'index']);

Route::resource('/movies', MoviesController::class);
Route::get('/movie/{id}/{slug}', [MoviesController::class, 'detailMovie']);

Route::get('/movies/create', [MoviesController::class, 'create'])->middleware('auth');

Route::get('/movie/create', [MoviesController::class, 'store']);

Route::get('/login', [AuthController::class, 'formLogin'])->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/login');
})->name('logout');


Route::get('/view', [MoviesController::class, 'listMovie']);
Route::get('/{id}/{slug}/edit', [MoviesController::class, 'edit']);