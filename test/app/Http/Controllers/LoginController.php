<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{   //Register Page
    public function viewRegister(){
        return view('register');
    }
    //Login Page
    public function viewLogin(){
        return view('login');
    }
    //Dashboard Page
    public function viewDashborad(){
        return view('dashboard');
    }
    //Shop Page
    public function viewshop(){
        return view('shop');
    }
    // Registration valedation
    public function form_validate(Request $request){
        $request->validate([
            'firstName'=>'required|alpha',
            'lastName'=>'required|alpha',
            'email'=>'required|email',
            'password'=>'required|min:8|regex:/^.(?=.{3,})(?=.[a-zA-Z])(?=.[0-9])(?=.[\d\x])(?=.[!$#%]).$/',
            'confirmPassword'=>'required|min:8|regex:/^.(?=.{3,})(?=.[a-zA-Z])(?=.[0-9])(?=.[\d\x])(?=.[!$#%]).$/',
            'city'=>'required|alpha',
            'phoneNumber'=>'numeric|digits_between:9,11'
        ]);
        return $request->input();
    }
}
