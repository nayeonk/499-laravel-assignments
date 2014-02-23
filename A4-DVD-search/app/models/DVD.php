<?php
/**
 * Created by PhpStorm.
 * User: Nayeon
 * Date: 2/21/14
 * Time: 7:33 PM
 */

class DVD {
    public $title;
    public $genre;
    public $ratings;

    public function __construct(){
//        $query = DB::table('dvds')
//            ->select('title', 'genres.genre_name', 'ratings.rating_name')
//            ->join('genres', 'genres.id', '=', 'dvds.genre_id')
//            ->join('ratings', 'ratings.id', '=', 'dvds.rating_id');
//        $dvds = $query->get();
//
//        return $dvds;
    }

    public function getAll() {
        $query = DB::table('dvds')
            ->select('title', 'genres.genre_name', 'ratings.rating_name')
            ->join('genres', 'genres.id', '=', 'dvds.genre_id')
            ->join('ratings', 'ratings.id', '=', 'dvds.rating_id');
        $dvds = $query->get();

        return $dvds;
    }
    public function getTable($name) {
        $query = DB::table($name)->select('*');
        $results = $query->get();
        return $results;
    }

    public function search($title, $genre_id, $rating_id) {
        $query = DB::table('dvds')
            ->select('title', 'genres.genre_name', 'ratings.rating_name', 'dvds.genre_id', 'dvds.rating_id', 'labels.label_name', 'sounds.sound_name', 'formats.format_name', DB::raw("DATE_FORMAT(release_date, '%b %d %Y %h:%i %p') AS release_date"))
            ->join('genres', 'genres.id', '=', 'dvds.genre_id')
            ->join('ratings', 'ratings.id', '=', 'dvds.rating_id')
            ->join('labels', 'labels.id', '=', 'dvds.label_id')
            ->join('sounds', 'sounds.id', '=', 'dvds.sound_id')
            ->join('formats', 'formats.id', '=', 'dvds.format_id');

        if ($title) {
            $query->where('title', 'LIKE', "%$title%");
        }

        if ($genre_id != 'all') {
            $query->where('genre_id', '=', $genre_id);
        }

        if ($rating_id != 'all') {
            $query->where('rating_id', '=', $rating_id);
        }

        $dvds = $query->get();

        return $dvds;
    }

} 