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
        echo "Olá, Insert USer";
        var_dump($data);
    }

}