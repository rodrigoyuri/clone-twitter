<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class User extends DataLayer 
{
    private $response = [];

    public function __construct()
    {
        parent::__construct("users", ["user_name", "email", "password"], "id", false);
    }

    public function createUser($data)
    {
       $this->user_name = $data["name"];
       $this->email = $data["email-register"];
       $this->password = $data["password-register"];

       if(!$this->save()) return $this->response["msg"] = "Erro ao efetuar o cadastro";
       return $this->response["msg"] = "Cadastro realizado com sucesso!";
    }

    public function authenticateUser($data)
    {
        $authUser = $this->find("email = :email AND password = :password", 
                                "email={$data["email-login"]}&password={$data["password-login"]}")->fetch();
        if(!$authUser) return $this->response["msg"] = "E-mail ou senha invalido";
        return $this->response["msg"] = "Login realizado com sucesso!";
    }
}