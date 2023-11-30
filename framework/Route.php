<?php

namespace Framework;

class Route
{

    protected $routes = [];

    public function register($route)
    {
       $this->routes[] = $route;
    }

    public function define($route)
    {
        $this->routes = $route;
        return $this;
    }
    public function redirect($uri)
    {
            if (!array_key_exists($uri, $this->routes)) {
                require 'resources/views/errors/404.php';
                return $this;
            }
            if (!file_exists($this->routes[$uri])) {
                require 'resources/views/errors/404.php';
                return $this;
            }
            require $this->routes[$uri];
            return $this;

    }

}