<?php
/**
 * Created by PhpStorm.
 * User: Nayeon
 * Date: 3/25/14
 * Time: 7:04 PM
 */

class BookSearch {

    protected $books;

    public function __construct($books) {
        $this->books = $books;
    }

    public function find($keyword, $exact=false) {
        $matched = [];
        strtolower($keyword);
        foreach ($this->books as $book) {
            if ($exact == true ){
                if(strtolower($book["title"]) == $keyword){
                    array_push($matched, $book["title"]);
                }
            }
            else if (strpos(strtolower($book["title"]),$keyword) != FALSE) {
                array_push($matched,$book["title"]);
            }
        }
        if (sizeof($matched) == 0) {
            return false;
        }
        var_dump($matched);
        return $matched;
    }

}