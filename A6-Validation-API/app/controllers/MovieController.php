<?php

class MovieController extends BaseController {

    public function search() {
        return View::make('movies/search');
    }

    public function listMovies() {
        $movie_title = Input::get ('movie_title');
        $rottenTomatoes = new \ITP\API\RottenTomatoesSearch();
        $json = $rottenTomatoes->getResults($movie_title);


        return View::make('movies/movies-list',[
            'movies' => $json->movies
        ]);
    }

}

?>