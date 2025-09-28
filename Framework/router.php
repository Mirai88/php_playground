<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$routes = include base_path('routes.php');

if (array_key_exists($uri, $routes)) {
    require base_path($routes[$uri]);
} else {
    handleHttpError(404);
}

function handleHttpError($code = 404)
{
    http_response_code($code);
    require 'views/404.php';
    exit();
}