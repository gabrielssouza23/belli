<?php

namespace Source\App\Api;

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

}