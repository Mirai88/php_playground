
<?php 

const BASE_PATH = __DIR__ . "/../";

include BASE_PATH . 'Framework/utils.php';

spl_autoload_register(function ($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    include base_path("{$class}.php");
});

include base_path('bootstrap.php');

include base_path('Framework/Router.php');


include base_path('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

// handle method in case of method spoofing (e.g. using _method field in forms)
if($method === 'POST' && isset($_POST['_method'])) {
    $method = strtoupper($_POST['_method']);
}

$router->route($uri, $method);