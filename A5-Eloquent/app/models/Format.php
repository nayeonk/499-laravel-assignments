<?php
/**
 * Created by PhpStorm.
 * User: Nayeon
 * Date: 2/25/14
 * Time: 10:23 PM
 */

class Format extends Eloquent {

    public $table = "formats";

    public function dvds() {

        return $this->hasMany('dvd');
    }

} 