<?php

namespace Source\Controllers;

use Source\Models\User;

class UserController 
{
    private $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function create($data) : void
    {
        $user = $this->user->createUser($data);
        echo json_encode($user);
    }

    public function login($data)
    {
        $user = $this->user->authenticateUser($data);
        echo json_encode($user);
    }
}