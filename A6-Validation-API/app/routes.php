<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/dvds/search', 'DVDController@search');
Route::get('/dvds', 'DVDController@listDVDs');
Route::get('/dvds/create', 'DVDController@createDVD');
Route::post('/dvds', 'DVDController@insertDVD');
Route::get('/movies/search', 'MovieController@search');
Route::get('/movies/', 'MovieController@listMovies');
