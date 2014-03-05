<?php

require_once __DIR__ . '/../ITP/API/RottenTomatoesSearch.php';

class MovieController extends BaseController {

    public function search() {
        return View::make('movies/search');
    }

    public function listMovies() {
        //$rottenTomatoes = new \ITP\API\RottenTomatoesSearch();
        //$rottenTomatoes = new RottenTomatoesSearch();
        //$json = $rottenTomatoes->getResults();
        $movie_title = Input::get ('movie_title');
        $endpoint = "http://api.rottentomatoes.com/api/public/v1.0/movies.json?apikey=pxa8jt8uapkr4qbxcraanper&q=$movie_title&page_limit=1";
        $json = file_get_contents($endpoint);
        $searchResults = json_decode($json);
        //dd($searchResults);

        return View::make('movies/movies-list',[
            'movies' => $searchResults->movies
        ]);
    }

}

?>