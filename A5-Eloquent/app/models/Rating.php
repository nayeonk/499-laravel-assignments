<?php
/**
 * Created by PhpStorm.
 * User: Nayeon
 * Date: 2/25/14
 * Time: 3:03 PM
 */

class Rating extends Eloquent {
    public $table = "ratings";

    public function dvds()
    {
        return $this->hasMany('dvd');
    }
} 