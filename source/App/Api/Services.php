<?php

namespace Source\App\Api;

use Source\Models\Service;

class Services extends Api
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getById (array $data)
    {
        //var_dump($data);
        $service = new Service();
        //var_dump($service->selectById($data["serviceId"]));
        $this->back($service->selectById($data["serviceId"]));
    }

    public function getByCategory(array $data)
    {
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