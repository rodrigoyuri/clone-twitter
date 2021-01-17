<?php

require __DIR__ . "/vendor/autoload.php";

require __DIR__ . "/source/Controller/UserController.php";

$router = new \CoffeeCode\Router\Router(BASE_URL);

$router->namespace("Source\Controller");

$router->group(null);
$router->get("/", "User:renderLogin");

$router->group("ops");
$router->get("/{errcode}", function($data) {
    echo "<h1>Erro: {$data['errcode']}</h1>";
});

$router->dispatch();

if($router->error()) {
    $router->redirect("/ops/{$router->error()}");
}
