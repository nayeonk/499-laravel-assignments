<?php

namespace ITP\API;

class RottenTomatoesSearch {
    public function getResults()
    {
        $endpoint = "http://api.rottentomatoes.com/api/public/v1.0/movies.json?apikey=pxa8jt8uapkr4qbxcraanper&q=Jack&page_limit=1";
        $json = file_get_contents($endpoint);
        return json_decode($json);
    }
}