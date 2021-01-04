<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$routes = new RouteCollection;

$routes->add('accueil', new Route('/', [
    '_controller' => 'App\src\Controller\FrontController::home'
]));
$routes->add('blog', new Route('/blog/{id}', [
    '_controller' => 'App\src\Controller\FrontController::article'
]));
$routes->add('inscription', new Route('/inscription', [
    '_controller' => 'App\src\Controller\FrontController::register'
]));
$routes->add('connection', new Route('/connection', [
    '_controller' => 'App\src\Controller\FrontController::login'
]));

return $routes;
