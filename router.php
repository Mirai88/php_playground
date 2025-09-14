<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$routes = include __DIR__ . '/routes.php';

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    handleHttpError(404);
}

function handleHttpError($code = 404)
{
    http_response_code($code);
    require 'views/404.php';
    exit();
}