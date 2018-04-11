@extends('layouts.default')

@section('title')

    all movies

@endsection

{{ $movie->title }}
{{ $movie->genre }}
{{ $movie->director }}
{{ $movie->year_created }}
{{ $movie->storyline  }}



    @section('content')
    <form method="POST" action="/movies/add">
        {{ csrf_field() }}
        <h2>Add a new movie</h2>

        <div class="form-group">

            <label for="title"> Add movie title</label>
            <input id="title" type="text" name="title" class="form-control">
            @include('partial.error-message',['fieldTitle' => 'title'])

        </div>

        <div class="form-group">

            <label for="body"> Upisi text posta</label>
            <textarea id="body" name="body" class="form-control"></textarea>
            @include('partial.error-message',['fieldTitle' => 'body'])

        </div>

        <div class="form-group">

            <label for="published">Check if you wish to publish this</label>
            <input id="published" class="form-control" type="checkbox" name="is_published" value="0">
        </div>

        <div class="form-group">

            <button type="submit" class="btn btn-primary"> submit post</button>

        </div>

    </form>
@endsection
