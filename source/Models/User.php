<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class User extends DataLayer 
{

    public function __construct()
    {
        parent::__construct("users", ["user_name", "email", "password"], "id", false);
    }

    public function createUser($data)
    {
       $this->user_name = $data["name"];
       $this->email = $data["email-register"];
       $this->password = $data["password-register"];
       
       return $this->save();
    }
}