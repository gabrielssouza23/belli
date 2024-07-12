<?php

namespace Source\App\Api;

use Source\Core\TokenJWT;
use Source\Models\User;

class Users extends Api
{
    public function listUsers ()
    {
        //echo "Olá, Lista de Usuários";
        $user = new User();
        //var_dump($user->selectAll());
        $this->back($user->selectAll());
    }

    public function insertUser (array $data)
    {

        $user = new User(
            NULL,
            $data["name"],
            $data["email"],
            $data["password"]
        );

        $insert = $user->insert();

        if(!$insert){
            $this->back([
                "type" => "error",
                "message" => $user->getMessage()
            ]);
            return;
        }

        $this->back([
            "type" => "success",
            "message" => $user->getMessage(),
            "user" => [
                "id" => $insert,
                "name" => $user->getName(),
                "email" => $user->getEmail()
            ]
        ]);

    }

    public function loginUser (array $data) {
        $user = new User();

        if(!$user->login($data["email"],$data["password"])){
            $this->back([
                "type" => "error",
                "message" => $user->getMessage()
            ]);
            return;
        }
        $token = new TokenJWT();
        $this->back([
            "type" => "success",
            "message" => $user->getMessage(),
            "user" => [
                "id" => $user->getId(),
                "name" => $user->getName(),
                "email" => $user->getEmail(),
                "token" => $token->create([
                    "id" => $user->getId(),
                    "name" => $user->getName(),
                    "email" => $user->getEmail()
                ])
            ]
        ]);

    }

    public function updateUser(array $data)
    {
        var_dump($data["name"],$data["email"]);
        var_dump($this->headers["token"]);
    }

}