<?php

namespace Framework;

class Router {

    protected $routes = [];

    /**
     * Add a GET route to the routing table
     * @param string $uri
     * @param string $controller
     */
    public function get($uri, $controller) {
        $this->registerRoute('GET', $uri, $controller);
    }
    
    public function post($uri, $controller) {
        $this->registerRoute('POST', $uri, $controller);
    }

    public function put($uri, $controller) {
        $this->registerRoute('PUT', $uri, $controller);
    }

    public function delete($uri, $controller) {
        $this->registerRoute('DELETE', $uri, $controller);
    }

    public function registerRoute($method, $uri, $controller) {
        $this->routes[] = [
            'method' => $method,
            'uri' => $uri,
            'controller' => $controller
        ];
    }

    public function route($uri, $method) {
        foreach($this->routes as $route) {
            if($route['uri'] == $uri && $route['method'] == $method) {
                require base_path($route['controller']);
                return;
            }
        }
        $this->setError(404);
    }

    public function setError($httpCode) {
        http_response_code($httpCode);
        view('errors/error' . $httpCode);
        exit;
    }
}

?>