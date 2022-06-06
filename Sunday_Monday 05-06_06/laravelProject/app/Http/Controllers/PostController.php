<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{ public function candyHome(){
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
    //View Data
    public function viewData()
    {
        $update = Post::all();
        return view('shop', compact('update'));
    }
    //Create Data
    public function createData(Request $request){
        $create=new Post();
        $create->candy_name=$request->input('name');
        $create->candy_quantity=$request->input('quantity');
        $create->candy_price=$request->input('price');
        $create->candy_image=$request->input('image');
        $create->save();
        return redirect('/shop')->with('message','The data has been added successfully');
    }
    //Add data
    public function addData(){
        return view('add');
    }
    //Update Data
    public function editData($id){
         $update = Post::find($id);
        return view('update',compact('update'));
    }
    public function updateData(Request $request, $id)
    {
        $update = Post::find($id); //Post is the model name
        $update->candy_name=$request->input('name');
        $update->candy_quantity=$request->input('quantity');
        $update->candy_price=$request->input('price');
        $update->update();
        return redirect('/shop')->with('message','The data has been updated successfully');
    }
    //Delete Data
    public function deleteData($id){
        $delete = Post::find($id);
        $delete->delete();
        return redirect('/shop')->with('message','The data has been updated successfully');
    }
    public function selectData($id){
        $update= Post::find($id);
        return view('showData',compact('update'));
    }
    //Monday 06/06 Task: Form Valedation
    public function form_validate(Request $request){
        $request->validate([
            'firstName'=>'required|alpha',
            'lastName'=>'required|alpha',
            'email'=>'required|email',
            'password'=>'required|min:8|regex:/^.(?=.{3,})(?=.[a-zA-Z])(?=.[0-9])(?=.[\d\x])(?=.[!$#%]).$/',
            'confirmPassword'=>'required|min:8|regex:/^.(?=.{3,})(?=.[a-zA-Z])(?=.[0-9])(?=.[\d\x])(?=.[!$#%]).$/',
            'city'=>'required|alpha',
            'phonenumber'=>'numeric|digits_between:9,11'
        ]);
        return $request->input();
    }
}
