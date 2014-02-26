<?php

class DVDController extends BaseController {

    public function search() {
        //$dvds = new DVD();
        $genres = Genre::all();
        $ratings = Rating::all();

        //dd($genres->genre_name);

        return View::make('dvds/search', [
            'genres' => $genres,
            'ratings' => $ratings
        ]);
    }

    public function listDVDs() {
        $dvd_title = Input::get ('dvd_title');
        $genre_id = Input::get('genre');
        $rating_id = Input::get('rating');

        $dvds = new DVD();
        //dd($dvd);

        $searchResults = $dvds->search($dvd_title, $genre_id, $rating_id);

        return View::make('dvds/dvds-list', [
            'dvds' => $searchResults
        ]);
    }
}