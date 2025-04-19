<?php

class Router
{
    public static $routes = [
        '/' => 'HomeController',
        '/posts' => 'PostController',
        // '/services' => 'HomeController',
    ];

    public static function get($uri, $params = [])
    {
        if (array_key_exists($uri, self::$routes)) {
            $data = extract($params);

            require "app/controllers/" . self::$routes[$uri] . ".php";
            $controller = new self::$routes[$uri]();

            $controller->handle($params);
        } else {
            abort();
        }
    }
}