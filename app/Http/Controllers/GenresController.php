<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class GenresController extends Controller
{
    public function show($id){

        $movies = Movies::where('genre',$id)->find();


        return view('movies.')
    }


}
