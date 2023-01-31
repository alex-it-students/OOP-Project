<?php

namespace App;
use Model;
use traits;
class Home
{
    use traits\Random;
    public function getFilms(){
        $model = new Model\Film();
        return $model->getDatas();
    }
    public function getSeries(){
        $model = new Model\Serie();
        return $model->getDatas();
    }
    public function getRealisators(){
        $model = new Model\Realisator();
        return $model->getDatas();
    }

    public function list(){
        $films = $this->getFilms();
        $series = $this->getSeries();
        $realisators = $this->getRealisators();
        $datas = [
            "Films" => SortMedia::firstThree(SortMedia::topRated($films)),
            "Series" => SortMedia::firstThree(SortMedia::topRated($series)),
            "Realisators" => SortMedia::firstThree($this->randomRealisator($realisators))
        ];
        return $datas;
    }
}