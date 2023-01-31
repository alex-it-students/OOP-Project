<?php

namespace App;

use Interfaces\PageInterface_;
use Model\Realisator as ModelRealisator;

class Realisator extends Media implements PageInterface_
{
    protected $defaultModel = "Model\\Realisator";
}