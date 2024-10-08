<?php

ob_start();

require  __DIR__ . "/../vendor/autoload.php";

// Os headers abaixo são necessários para permitir o acesso à API
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    // Respondendo para pré-flight requests
    http_response_code(200);
    exit();
}

use CoffeeCode\Router\Router;

$route = new Router(url(),":");

$route->namespace("Source\App\Api");

/* USERS */
$route->group("/users");

$route->get("/", "Users:listUsers");
$route->post("/", "Users:createUser");
$route->get("/me", "Users:getUser");
$route->post("/login", "Users:loginUser");
$route->post("/update", "Users:updateUser");
$route->post("/set-password", "Users:setPassword");
$route->get("/token-validate", "Users:tokenValidate");

$route->group(null);

/* FAQS */
$route->group("/faqs");
$route->get("/", "Faqs:listFaqs");
$route->group(null);

$route->group("/medicamentos");

// Rota para inserir um medicamento
$route->post("/medicamentos", "Medicamentos:insert");

// Rota para listar todos os medicamentos
$route->get("/medicamentos", "Medicamentos:getAll");

// Rota para listar medicamentos de um usuário específico
$route->post("/medicamentos/user", "Medicamentos:getByUser");

$route->group(null);

/* SERVICES CATEGORIES */
$route->group("/services-categories");
$route->post("/", "ServicesCategories:insert");
$route->get("/", "ServicesCategories:getCategory");
$route->put("/", "ServicesCategories:update");
$route->delete("/", "ServicesCategories:remove");
$route->group(null);

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
