<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{
    public function index()
    {

        $movies = Movie::all();


        return view('movies.index', compact('movies'));

    }

    public function show($id)
    {


        $movie = Movie::with('comment')->find($id);


        return view('movies.show', compact(['movie']));

    }

    public function create(){

        return view('movies.create');

    }

    public function store(request $request){


//            dd(request()->all()['year_created']);

        $this->validate(request(),[

            'title' => 'required',
            'genre' => 'required',
            'year_created' => 'date_format:"Y-m-d"|after:"1900-01-01"|before:"' . date('Y-m-d') . '"',
            'storyline' => 'max:1000',


        ]);

        Movie::create(request()->all());


return redirect()->route('movies.index');


    }
}
