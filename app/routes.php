<?php

use Framework\Router;

$router = new Router();

$router->get('/', 'controllers/home.php');
$router->get('/notes/create', 'controllers/notes/create.php');
$router->post('/notes/store', 'controllers/notes/store.php');
$router->get('/notes', 'controllers/notes/list.php');