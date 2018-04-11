<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;


class CommentController extends Controller
{
    public function store($id)
    {

        $movie = Movie::find($id);

        $this->validate(request(), [
            'content' => 'required',

        ]);




    $movie->comment()->create(request()->all());

        return redirect()->back();
    }
}
