<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class form_validate extends Controller
{
    public function form_validate(Request $request){
        $request->validate([
            'firstname'=>'required|alpha',
            'email'=>'required|email',
            'password'=>'required|min:8|regex:/^.(?=.{3,})(?=.[a-zA-Z])(?=.[0-9])(?=.[\d\x])(?=.[!$#%]).$/',
            'phonenumber'=>'numeric|digits_between:9,11'
        ]);
        return $request->input();
    }
    public function oneRelation(){
        return User::find(1)->post;
    }
}
