<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function showAllMovies(){
        return view('movies');
    }
    public function showSingleMovie($id){
        return view('movie');
    }
}
