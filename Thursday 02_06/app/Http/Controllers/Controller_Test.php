<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller_Test extends Controller
{
    public function candyHome(){
      return view ('layout.home');
    }
    public function candyAbout(){
        return view ('layout.about');
    }
    public function candyContact(){
        return view ('layout.contact');
    }
    public function candyRegister(){
        return view ('layout.register');
    }
    public function candyLogin(){
        return view ('layout.login');
    }
    public function Send(){

        $array=['member1'=>'Roa',
        'member2'=>'Raghad',
        'member3'=>'Tamara',
        'member4'=>'Dyar',
    ];
    return view('layout.about', compact('array'));
}
}