<?php

ob_start();

require  __DIR__ . "/../vendor/autoload.php";

// os headers abaixo são necessários para permitir o acesso a API
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header('Access-Control-Allow-Credentials: true'); // Permitir credenciais
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

use CoffeeCode\Router\Router;

$route = new Router(url(),":");

$route->namespace("Source\App\Api");

$route->group("/users");

$route->get("/", "Users:listUsers");
$route->post("/","Users:insertUser");
$route->post("/login","Users:loginUser");
$route->post("/update","Users:updateUser");
$route->post("/set-password","Users:setPassword");

$route->group("null");

$route->group("/services");

//$route->get("/service/{serviceId}/category/{categoryId}","Services:getById");
$route->get("/service/{serviceId}","Services:getById");

$route->put("/update/service/{serviceId}/name/{name}","Services:update");
$route->delete("/delete/service/{serviceId}","Services:delete");

$route->get("/category/{categoryId}","Services:getByCategory");

$route->group("null");

$route->group("/faqs");

$route->get("/","Faqs:listFaqs");

$route->group("null");

$route->dispatch();

/** ERROR REDIRECT */
if ($route->error()) {
    header('Content-Type: application/json; charset=UTF-8');
    http_response_code(404);

    echo json_encode([
        "errors" => [
            "type " => "endpoint_not_found",
            "message" => "Não foi possível processar a requisição"
        ]
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
}

ob_end_flush();
