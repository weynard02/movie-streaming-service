<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\GenreController;
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

Route::get('/', function () {
    return view('welcome');
});

//route awal sementara
//ke depannya, menggunakan perantara controller
Route::get('/my', function () {
    return view('dashboard.index');
});

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/create', [AdminController::class, 'create']);
Route::post('/admin', [AdminController::class, 'store']);
Route::get('/admin/{movie_id}', [AdminController::class, 'show']);
Route::delete('/admin/{movie_id}', [AdminController::class, 'destroy']);
Route::get('/admin/{movie_id}/edit', [AdminController::class, 'edit']);
Route::put('/admin/{movie_id}', [AdminController::class, 'update']);
Route::get('/admin/artist/{movie_id}', [ArtistController::class, 'create']);
Route::post('/admin/artist/{movie_id}', [ArtistController::class, 'store']);
Route::delete('/admin/artist/{movie_id}/{cast_id}', [ArtistController::class, 'destroyPivot']);
Route::get('/admin/genre/{movie_id}', [GenreController::class, 'create']);
Route::post('/admin/genre/{movie_id}', [GenreController::class, 'store']);
Route::delete('/admin/genre/{movie_id}/{genre_id}', [GenreController::class, 'destroyPivot']);