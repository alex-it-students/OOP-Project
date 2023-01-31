<?php

namespace core;

Class Router {

    public function start(){
        // on récupère l'uri et on initialise les variables
        $_action = 'list';
        $_page = 'home';
        $params = [];
        $_id = 0;
        $uri = $_SERVER['REQUEST_URI'];

        // on décompose l'uri pour récupérer les pages, actions et id
        if($uri != '')
        {
            $params = explode('/', $uri);
        }
        if($params[1] != '')
        {

            // Redirection des pages en utilisant un Switch
            switch($params[1])
            {
                case 'film':
                    $_page = 'film';
                    break;
                case 'serie':
                    $_page = 'serie';
                    break;
                case 'realisator':
                    $_page = 'realisator';
                    break;
                case 'home':
                    $_page = 'home';
                    break;
                default:
                    $_page = 'error404';
                    break;
            }
        }
        if (isset($params[2]) && $params[2] != null)
        {
            switch ($params[2]) {
                case 'detail':
                    $_action = 'detail';
                    break;
                default:
                    $_action = 'list';
                    $_page = 'error404';
                    break;
            }
        }else $_action='list';
        if(  isset($params[3]) && $params[3] != null)
        {
            $_id = $params[3];
        }
        // on instancie le controleur
        $controller = "App\\". ucfirst(strtolower($_page));
        $page = new $controller;

        if( $_action == 'detail' )
        {
            $data = $page->$_action($_id);
        }else {
            $datas = $page->$_action();
        }

        include_once './views/'. $_page .'/'. $_action .'.php';
    }

}
