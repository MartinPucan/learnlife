<?php
declare(strict_types=1);

class Router 
{
    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load(string  $file): object
    {
        $router = new static;

        require $file;

        return $router;
    }
    public function get(string $uri, string $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    } 

    public function post(string $uri, string $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    } 

    public function direct(string $uri, string $requestType): int // requestType equals to POST or GET, ...
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri])
            );
        }

        throw new Exception("No route defined for this URI.");
    }

    protected function callAction(string $controller, string $action): int
    {
        $controller = new $controller;

        if (! method_exists($controller, $action)) {
            throw new Exception(
                "{$controller} does not respond to the {$action} action."
            );  
        }

        return $controller->$action();
    }

}
