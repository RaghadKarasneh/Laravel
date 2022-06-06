<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewPost;
class NewPostController extends Controller
{
    public function viewComment(){
        dd(NewPost::find(1)->comments);
    }
}
