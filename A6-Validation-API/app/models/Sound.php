<?php
/**
 * Created by PhpStorm.
 * User: Nayeon
 * Date: 2/25/14
 * Time: 10:22 PM
 */

class Sound extends Eloquent {
    public $table = "sounds";

    public function dvds() {

        return $this->hasMany('dvd');
    }
} 