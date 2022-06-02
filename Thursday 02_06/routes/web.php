<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller_Test;
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
Route::get('/home', [Controller_Test::class,'candyHome']);
Route::get('/about', [Controller_Test::class,'candyAbout']);
Route::get('/contact', [Controller_Test::class,'candyContact']);
Route::get('/register', [Controller_Test::class,'candyRegister']);
Route::get('/login', [Controller_Test::class,'candyLogin']);
Route::get('/about', [Controller_Test::class,'Send']);

// Route::get('/listdata', function(){
//     $tasks = [
//         'sneakers',
//         'mars',
//         'twix'  
//     ];
//     return view('listdata',compact('tasks')); 
// });
// Route::get('/listdata', [Controller_Test::class, 'show']);
// Route::get('/newTest/id/{id}/user/{user}', 'App\Http\Controllers\Controller_Test@test');

//Q2
Route::get('/newTest/id/{id}/user/{user}', [Controller_Test::class,'test'])-> where('id', '[0-9]+');

//Q3
Route::get('/newTest/id/{id}/user/{user}', [Controller_Test::class,'test'])-> where('user', '[A-z]+');
