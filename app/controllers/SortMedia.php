<?php

namespace App;
Class SortMedia {

    // on prend les
    static function firstThree($array) {
        return array_slice($array, 0, 3);
    }

    static function topRated($array) {
        usort($array, function($a, $b) {
            return $b['Rating'] - $a['Rating'];
        });
        return $array;
    }

}
