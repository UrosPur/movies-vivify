@extends('layouts.default')

@section('title')

    add movie

@endsection

@section('content')

    <div class="album text-muted">
        <div class="container">

            <div class="row">


                <form method="POST" action="/movie/add">
                    {{ csrf_field() }}
                    <h2>Add a new movie</h2>

                    <div class="form-group">

                        <label for="title"> Add movie title</label>
                        <input id="title" type="text" name="title" class="form-control">
                        @include('partials.error-message',['fieldTitle' => 'title'])

                    </div>

                    <div class="form-group">

                        <label for="genre"> add movie genre</label>
                        <input id="genre" type="text" name="genre" class="form-control">
                        @include('partials.error-message',['fieldTitle' => 'genre'])

                    </div>

                    <div class="form-group">

                        <label for="director"> add movie director</label>
                        <input id="director" type="text" name="director" class="form-control">
                        @include('partials.error-message',['fieldTitle' => 'director'])

                    </div>

                    <div class="form-group">

                        <label for="year_created"> What year was the movie created</label>
                        <input id="year_created" type="date" name="year_created" class="form-control">
                        @include('partials.error-message',['fieldTitle' => 'year_created'])

                    </div>


                    <div class="form-group">

                        <label for="storyline"> add movie storyline</label>
                        <textarea id="storyline" name="storyline" class="form-control"></textarea>
                        @include('partials.error-message',['fieldTitle' => 'storyline'])

                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"> submit post</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection
