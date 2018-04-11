@extends('layouts.default')

@section('title')

    all movies

@endsection

@section('content')
    <div class="album text-muted">
        <div class="container">

            <div class="row">

                @foreach($movies as $movie)

                    <div class="card">
                        <h3>{{ $movie->title }} </h3>
                        <p class="card-text">{{ substr($movie->storyline,0,4) }}....</p>
                        <a href="{{ route('movies.show', ['id' => $movie->id]) }}">see more</a>
                    </div>

                @endforeach

            </div>

        </div>
    </div>
@endsection
