<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\MovieCRUDController;
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
Route::get('/movie-detail/{movie_id}', [MovieController::class, 'movieDetail']);
Route::get('/movies', ['App\Http\Controllers\MovieController', 'index']);
Route::get('/about-us', [AboutController::class, 'aboutUs']);
Route::post('/movies/{movie_id}/review', [ReviewController::class, 'store'])
    ->name('movie.review');

// Create route ex
// Route::post('/movies', [MovieController::class, 'store']);
// Update route ex
// Route::put('/movies/{movie}', [MovieController::class, 'update']);

// Movie CRUD

// create
Route::get('/movies/create', [MovieCRUDController::class, 'create'])->name('movies.create');
Route::post('/movies', [MovieCRUDController::class, 'store'])->name('movies.store');
// Edit
Route::get('/movies/{movie}/edit', [MovieCRUDController::class, 'edit'])->whereNumber('movie')->name('movies.edit');
// Update
Route::put('/movies/{movie}', [MovieCRUDController::class, 'update'])->whereNumber('movie')->name('movies.update');
