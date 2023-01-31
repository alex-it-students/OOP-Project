<?php
namespace traits;
Trait Random {
    public function randomRealisator($array)
    {
        shuffle($array);
        return $array;
    }
}