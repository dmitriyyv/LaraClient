<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function showAllMovies(){
        $movies = Movie::all();
        return view('movies');
    }
    public function showSingleMovie($id){
        return view('movie');
    }
}
