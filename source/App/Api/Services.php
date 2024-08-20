<?php

namespace Source\App\Api;

use Source\Models\Service;

class Services extends Api
{
    public function __construct()
    {
        parent::__construct();
        // quando todas as rotas da classe são autenticadas, o método $this->auth() pode ser evocado aqui
        // $this->auth();
    }

    public function getById (array $data)
    {
        // método é chamaddo quando a rota precisa de autenticação
        $this->auth();
        $service = new Service();
        //var_dump($service->selectById($data["serviceId"]));
        $this->back($service->selectById($data["serviceId"]));
    }

    public function getByCategory(array $data)
    {
        // quando a rota não necessita de autenticação, não evoca o método $this->auth()
        $service = new Service();
        $this->back($service->selectByCategory($data["categoryId"]));
    }

    public function update (array $data)
    {
        var_dump($data);
    }

    public function delete (array $data)
    {
        var_dump($data);
    }

}