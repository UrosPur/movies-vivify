@extends('layouts.genres')

@section('title')

    all movies

@endsection

@section('content')
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Movie list</h1>
            <p class="lead text-muted">Lorem ispum dolorem creptum</p>
            <p>
                <a href="{{ route('movies.index') }}" class="btn btn-primary">show all movies</a>
            </p>
        </div>
    </section>


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
