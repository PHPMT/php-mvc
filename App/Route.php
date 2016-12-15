<?php

namespace App;

use PHPMT\Init\Bootstrap;

class Route extends Bootstrap
{
    protected function initRoutes()
    {
        $routes['home'] = array('route' => '/', 'controller' => 'IndexController', 'action' => 'index');
        $routes['contact'] = array('route' => '/contact', 'controller' => 'IndexController', 'action' => 'contact');
        $this->setRoutes($routes);
    }
}