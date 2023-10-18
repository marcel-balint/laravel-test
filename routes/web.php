<?php

use App\Http\Controllers\AwardController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SendDataController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [IndexController::class, 'index']);

Route::get('/awards', [AwardController::class, 'index']);
Route::get('/create', [CreateController::class, 'create']);
Route::get('/top-rated-movies', [MovieController::class, 'topRated']);
Route::get('/movies/shawshank-redemption', [MovieController::class, 'shawshank']);
Route::get('/search', [MovieController::class, 'search']);
Route::get('/movie-detail', [MovieController::class, 'movieDetail']);
Route::get('/movies', ['App\Http\Controllers\MovieController', 'index']);
