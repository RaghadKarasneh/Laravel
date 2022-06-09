<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Netflix;

class NetflixController extends Controller
{
    
    //Fetch movies
    public function index(){
        $movies=Netflix::all();
        return view('home',compact('movies'));
    }
     //Creat new movie
     public function createMovie(Request $request){
        $create=new Netflix();
        $create->movie_name=$request->input('name');
        $create->movie_description=$request->input('desc');
        $create->movie_genre=$request->input('genre');
        $create->movie_video=$request->input('video');
        $create->save();
        return redirect('/movies')->with('message','The data has been added successfully');
    }
    //Add data
    public function addMovie(){
        return view('addMovies');
    }
    public function editMovie($id){
        $update = Netflix::find($id);
       return view('updateMovies',compact('update'));
   }
   public function updateMovie(Request $request, $id)
   {
       $update = Netflix::find($id); //Post is the model name
       $update->movie_name=$request->input('name');
       $update->movie_description=$request->input('desc');
       $update->movie_genre=$request->input('genre');
       $update->movie_video=$request->input('video');
       $update->update();
       return redirect('/movies')->with('message','The data has been updated successfully');
   }
    //Delete Movies
    public function deleteMovie($id){
        $delete = Netflix::find($id);
        $delete->delete();
        return redirect('/movies')->with('message','The data has been deleted successfully');
    }
}
