<?php

namespace Source\Models;

use Source\Core\Connect;
use Source\Core\Model;

class Service extends Model
{
    private $id;
    private $categoryId;
    private $name;
    private $description;
    private $message;

    public function __construct()
    {
        $this->entity = "services";
    }

    public function selectById (int $serviceId): ?array
    {
        $query = "SELECT services.id, services.name, services.description,  services_categories.name as 'category_name' 
                  FROM services
                  INNER JOIN services_categories ON services_categories.id = services.service_category_id
                  WHERE services.id = :service_id";
        $conn = Connect::getInstance();
        $stmt = $conn->prepare($query);
        $stmt->bindParam("service_id",$serviceId);

        $stmt->execute();

        return (array)$stmt->fetch();
    }

    public function selectByCategory (int $idCategory): ?array
    {
        $query = "SELECT services.id, services.name, services.description,  services_categories.name as 'category_name'
                  FROM services
                  INNER JOIN services_categories ON services_categories.id = services.service_category_id
                  WHERE services_categories.id = :category_id";
        $conn = Connect::getInstance();
        $stmt = $conn->prepare($query);
        $stmt->bindParam("category_id", $idCategory);
        $stmt->execute();
        return $stmt->fetchAll();
    }

}