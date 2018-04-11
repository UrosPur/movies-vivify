<ul>

@foreach($movies as $movie)

<li>
    {{ $movie->title }} </br>

    {{ substr($movie->storyline,0,4) }}....</br>

    <a href="{{ route('movies.show', ['id' => $movie->id]) }}">see more</a>

</li>

    @endforeach

</ul>