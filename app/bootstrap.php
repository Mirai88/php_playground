<?php

use Framework\Container;
use Framework\Database;
use Framework\App;

$container = new Container();

$container->bind(Database::class, function() {
    $config = require base_path('dbconfig.php');
    return new Database($config);
});

App::setContainer($container);