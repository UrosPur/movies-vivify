<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {


    return view('welcome');
});

Route::get('/movies/create', 'MoviesController@create')->name('movies.create');
Route::post('/movie/add', 'MoviesController@store')->name('movies.store');

Route::get('/movies', 'MoviesController@index')->name('movies.index');
Route::get('/movies/{id}', 'MoviesController@show')->name('movies.show');


Route::post('/movies/{id}/comments', 'CommentController@store')->name('comment-post');
Route::get('/genres/{genre}', 'GenresController@show')->name('genres.show');

