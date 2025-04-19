<?php

function abort($code = 404)
{
    http_response_code($code);

    require "app/views/$code.php";

    die();
}

function isActive($uri)
{
    $path = parse_url($_SERVER['REQUEST_URI'])['path'];

    return $path === $uri;
}