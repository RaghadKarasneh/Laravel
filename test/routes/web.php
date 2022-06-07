<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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
Route::get('/register', [LoginController::class,'viewRegister']);
Route::get('/login', [LoginController::class,'viewLogin']);
Route::get('/dashboard', [LoginController::class,'viewDashborad']);
Route::get('/shop', [LoginController::class,'viewShop']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/routes', 'HomeController@admin')->middleware('checkAdmin');