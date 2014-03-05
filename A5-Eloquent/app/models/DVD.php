<?php
/**
 * Created by PhpStorm.
 * User: Nayeon
 * Date: 2/21/14
 * Time: 7:33 PM
 */

class DVD extends Eloquent{
    protected $table = 'dvds';

    public function __construct(){
//        $query = DB::table('dvds')
//            ->select('title', 'genres.genre_name', 'ratings.rating_name')
//            ->join('genres', 'genres.id', '=', 'dvds.genre_id')
//            ->join('ratings', 'ratings.id', '=', 'dvds.rating_id');
//        $dvds = $query->get();
//
//        return $dvds;
    }

    public function genre() {
        return $this->belongsTo('genre');
    }

    public function rating() {
        return $this->belongsTo('rating');
    }

    public function label() {
        return $this->belongsTo('label');
    }

    public function sound() {
        return $this->belongsTo('sound');
    }
    public function format() {
        return $this->belongsTo('format');
    }

    public function search($title, $genre_id, $rating_id) {
        $dvds = DVD::with('genre','rating','label','format','sound');
        //dd($dvds);

        if($title) {
            $dvds->where('title', 'LIKE', "%$title%");
        }

        if($genre_id != 'all') {
            $dvds->where('genre_id', '=', $genre_id);
        }

        if($rating_id != 'all') {
            $dvds->where('rating_id', '=', $rating_id);
        }
        return $dvds->take(30)->get();
    }


} 