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

    public function createDVD() {

        $genres = Genre::all();
        $ratings = Rating::all();
        $formats = Format::all();
        $labels = Label::all();
        $sounds = Sound::all();

        return View::make('dvds/create', [
           'genres' => $genres,
           'ratings' => $ratings,
           'formats' => $formats,
           'labels' => $labels,
           'sounds' => $sounds
        ]);
    }

    public function insertDVD() {
        $dvd_title = Input::get ('dvd_title');
        $genre_id = Input::get('genre');
        $rating_id = Input::get('rating');
        $format_id = Input::get('format');
        $label_id = Input::get('label');
        $sound_id = Input::get('sound');

        $dvd = new DVD();

        $dvd->title = $dvd_title;
        $dvd->genre_id = $genre_id;
        $dvd->rating_id = $rating_id;
        $dvd->format_id = $format_id;
        $dvd->label_id = $label_id;
        $dvd->sound_id = $sound_id;
        $dvd->save();

        return Redirect::to('dvds/create')->with('success', 'The DVD was added successfully!');
    }
}