<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller_Test extends Controller
{
    public function test($id,$user){
       echo "id: ".$id. '<br> user: '.$user;
    }
}
