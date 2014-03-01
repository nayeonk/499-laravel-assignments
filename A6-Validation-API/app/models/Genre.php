<?php
/**
 * Created by PhpStorm.
 * User: Nayeon
 * Date: 2/25/14
 * Time: 3:00 PM
 */

class Genre extends Eloquent {

    public $table = "genres";

    public function dvds() {

        return $this->hasMany('dvd');
    }
} 