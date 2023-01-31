<?php

require_once 'vendor/autoload.php';
include_once 'views/partials/header.php' ;

use core\Router;
use core\Constant;

$_page   = 'home'; // film, serie, realisateur ...
$_action = 'list'; // detail, create
$_id     = 0;



$app = new Router();
$app->start();



