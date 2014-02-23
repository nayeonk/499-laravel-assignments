<?php

class DVDController extends BaseController {

    public function search() {
        $dvds = new DVD();

        //dd($dvds->getAll());

        return View::make('dvds/search', [
            'genres' => $dvds->getTable('genres'),
            'ratings' => $dvds->getTable('ratings')
        ]);
    }

    public function listDVDs() {
        $dvd_title = Input::get ('dvd_title');
        $genre_id = Input::get('genre');
        $rating_id = Input::get('rating');

        $dvds = new DVD();
        $searchResults = $dvds->search($dvd_title, $genre_id, $rating_id);

        return View::make('dvds/dvds-list', [
            'dvds' => $searchResults
        ]);
    }
}