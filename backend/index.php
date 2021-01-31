<?php

use Source\Controllers\UserController;

require __DIR__ . "/vendor/autoload.php";

$router = new \CoffeeCode\Router\Router(BASE_URL);

$router->namespace("Source\Controllers");

$router->group(null);
$router->post("/register", "UserController:create");
$router->post("/login", "UserController:login");

$router->group("ops");
$router->get("/{errcode}", function($data) {
    echo "<h1>Erro: {$data['errcode']}</h1>";
});

$router->dispatch();

if($router->error()) {
    $router->redirect("/ops/{$router->error()}");
}
