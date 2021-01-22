<?php

namespace Source\Controllers;

use League\Plates\Engine;

class User 
{
    private $view;

    public function __construct()
    {
        $this->view = new Engine(__DIR__ . "/../templates", "php");
    }

    public function renderLogin()
    {
        echo $this->view->render("/login/index");
    }
}