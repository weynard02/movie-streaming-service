<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\LoginController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', HomeController::class);

Route::get('/my', MyController::class);

Route::get('/login', LoginController::class);


Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/create', [AdminController::class, 'create']);
Route::get('/admin/artist', [ArtistController::class, 'index']);

Route::post('/admin', [AdminController::class, 'store']);
Route::get('/admin/{movie_id}', [AdminController::class, 'show']);
Route::delete('/admin/{movie_id}', [AdminController::class, 'destroy']);
Route::get('/admin/{movie_id}/edit', [AdminController::class, 'edit']);
Route::put('/admin/{movie_id}', [AdminController::class, 'update']);

Route::get('/admin/artist/{artist_id}/edit', [ArtistController::class, 'edit']);
Route::put('/admin/artist/{artist_id}', [ArtistController::class, 'update']);
Route::delete('/admin/artist/{artist_id}', [ArtistController::class, 'destroy']);

Route::get('/admin/artist/{movie_id}', [ArtistController::class, 'create']);
Route::post('/admin/artist/{movie_id}', [ArtistController::class, 'store']);
Route::delete('/admin/artist/{movie_id}/{cast_id}', [ArtistController::class, 'destroyPivot']);
Route::get('/admin/genre/{movie_id}', [GenreController::class, 'create']);
Route::post('/admin/genre/{movie_id}', [GenreController::class, 'store']);
Route::delete('/admin/genre/{movie_id}/{genre_id}', [GenreController::class, 'destroyPivot']);