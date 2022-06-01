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
Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact-us', function () {
    return view('contact');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});
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

// Route::get('/user/id/{id}/user/{user}', function ($id, $user) {
//     //
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);