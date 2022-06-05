<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/home', [PostController::class,'candyHome']);
Route::get('/about', [PostController::class,'candyAbout']);
Route::get('/contact', [PostController::class,'candyContact']);
Route::get('/register', [PostController::class,'candyRegister']);
Route::get('/login', [PostController::class,'candyLogin']);
Route::get('/about', [PostController::class,'Send']);
Route::get('/shop', [PostController::class, 'viewData']);
Route::get('/showData/id/{id}', [PostController::class, 'SelectData']);
Route::get('/edit-data/id/{id}', [PostController::class, 'editData']);
Route::put('/update-data/id/{id}', [PostController::class, 'updateData']);
Route::get('/delete-data/id/{id}', [PostController::class, 'deleteData']);
Route::get('add-data', [PostController::class, 'addData']);
Route::post('add-data', [PostController::class, 'createData']);
