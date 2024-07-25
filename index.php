<?php

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

ob_start();

$route = new Router(url(), ":");

$route->namespace("Source\App");

$route->group(null);

$route->get("/", "Web:home");
$route->get("/sobre", "Web:about");
$route->get("/contato", "Web:contact");
$route->get("/localizacao", "Web:location");
$route->get("/carrinho","Web:cart");
$route->get("/entrar","Web:login");
$route->get("/faqs","Web:faqs");
$route->get("/ops/{errcode}", "Web:error");

$route->group("/app");

$route->get("/", "App:home");
$route->get("/perfil", "App:profile");
$route->get("/mensagens", "App:messages");
//$route->get("/carrinho", "App:cart");

$route->group(null);

$route->group("/adm");

$route->get("/", "Admin:home");
$route->get("/perfil","Admin:profile");
$route->get("/produtos", "Admin:products");

$route->group(null);

$route->dispatch();

if ($route->error()) {
    $route->redirect("/ops/{$route->error()}");
}

ob_end_flush();