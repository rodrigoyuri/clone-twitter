<?php

namespace Source\Controllers;

use League\Plates\Engine;
use Source\Models\User;

class UserController 
{
    private $view;
    private $user;

    public function __construct()
    {
        $this->view = new Engine(__DIR__ . "/../templates", "php");
        $this->user = new User();
    }

    public function renderLogin() : void
    {
        echo $this->view->render("/login/index");
    }

    public function create($data) : void
    {
        $user = $this->user->createUser($data);
     
        if($user) {
            echo json_encode(array("msg" => "Cadastro realizado com sucesso!"));
        } else {
            echo json_encode(array("msg" => "Erro ao efetuar o cadastro"));
        }
    }
}