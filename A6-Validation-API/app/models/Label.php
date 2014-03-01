<?php
/**
 * Created by PhpStorm.
 * User: Nayeon
 * Date: 2/25/14
 * Time: 10:20 PM
 */

class Label extends Eloquent {
    protected $table = 'labels';

    public function dvds() {

        return $this->hasMany('dvd');
    }

} 