<?php

namespace App\Core;

use App\Controller\HomeController;
use App\Controller\PostController;

class Router
{
    public function run()
    {
        $path = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/';

        $pathExplod = explode('/', $path);
        $controller = $pathExplod[1] ? ucwords($pathExplod[1]) : 'Home';
        $controller = 'App\Controller\\' . $controller . 'Controller';
        // $method = isset($pathExplod[2]) ? $pathExplod[2] : 'index';
        $method = $pathExplod[2] ?? 'index';

        $controller = new $controller;
        $controller->$method();

        // elseif ('/post/add') {
        //     $controller = new PostController;
        //     $controller->add();
        // }
    }
}
