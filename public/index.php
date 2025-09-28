
<?php 

const BASE_PATH = __DIR__ . "/../";

include BASE_PATH . 'Framework/utils.php';

spl_autoload_register(function ($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    include base_path("{$class}.php");
});

 include base_path('Framework/router.php');
