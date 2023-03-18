<?php

use App\Http\Controllers\AdminController;
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
Route::delete('/admin/{movie_id}', [AdminController::class, 'destroy']);