<?php
namespace InstitucionalCctp\Backend;

class Router {
    private $routes = [];

    public function get($path, $callback) {
        $this->routes['GET'][$path] = $callback;
    }

    public function run() {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if (isset($this->routes['GET'][$uri])) {
            $callback = $this->routes['GET'][$uri];
            echo call_user_func($callback);
        } else {
            http_response_code(404);
            echo "404 - Página no encontrada";
        }
    }
}
