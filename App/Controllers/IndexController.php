<?php

namespace App\Controllers;

use PHPMT\Controller\Action;
use PHPMT\DI\Container;

class IndexController extends Action
{
    public function index()
    {
        $clients = Container::getModel("client");
        $this->view->clients = $clients->fetchAll();
        $this->render("index");
    }

    public function contact()
    {
        $client = Container::getModel("client");
        $this->view->client = $client->find(2);
        $this->render("contact");
    }
}