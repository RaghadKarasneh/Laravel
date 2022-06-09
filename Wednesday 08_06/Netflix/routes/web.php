<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NetflixController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/movies', [NetflixController::class,'index']);
Route::get('/movies/create', [NetflixController::class, 'addMovie']);
Route::post('/movies', [NetflixController::class, 'createMovie']);
Route::get('/movies/{id}/edit', [NetflixController::class, 'editMovie']);
Route::put('movies/{id}', [NetflixController::class, 'updateMovie']);
Route::get('/movies/delete/{id}', [NetflixController::class, 'deleteMovie']);