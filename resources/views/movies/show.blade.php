@extends('layouts.single')

@section('title')

    single movie

@endsection

@section('content')
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">{{ $movie->title }}</h1>
        <p class="lead text-muted">
            This movie is a classic {{ $movie->genre }}. It's directed by {{ $movie->director }}. <br>
            It was made in {{ $movie->year_created }}.
        </p>
        <h2 class="jumbotron-heading">Storyline</h2>
        <p class="lead text-muted">
            {{ $movie->storyline  }}
        </p>


    </div>

    <div class="container">
        <h4 class="jumbotron-heading">Comments</h4>
        @forelse($movie->comment as $comment)

            <li>
                <p>{{ $comment->content }}</p>
                <p>{{ $comment->created_at }}</p>
            </li>

        @empty
            <li>
                nema komentara
            </li>
        @endforelse

    </div>
</section>

    @endsection