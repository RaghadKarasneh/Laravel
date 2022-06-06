<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\form_validate;
use App\Http\Controllers\NewPostController;

use App\Models\NewPost;
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

Route::post('form', [form_validate::Class, 'form_validate']);
Route::view("show","form");

Route::get('/post',[form_validate::class,'oneRelation']);
Route::get('/comment',[NewPostController::class,'viewComment']);
// Route::namespace('phase1')->group(function(){
//     Route::get('/home',function(){
//         return view('home');
//     });
// });