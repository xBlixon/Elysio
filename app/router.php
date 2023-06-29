<?php

use Velsym\Http\Exceptions\RouteMethodException;
use Velsym\Http\Request;
use Velsym\Http\Response;
use Velsym\Http\Route;

$request = Request::getInstance();

$files = array_diff(scandir(_ROUTES), array('.', '..'));
$routes = [];
$rendered = false;
foreach ($files as $routeFile)
{
    $fullPath = _ROUTES . $routeFile;
    $route = (require $fullPath); /* @var Route $route */
    $path = $route->path;
    $routes[$path] = $route;
}

if(key_exists($request->path, $routes))
{
    $route = $routes[$request->path];
    $method = $_SERVER['REQUEST_METHOD'];

    $response = NULL;
    try {
        $response = $route->$method();
    } catch (RouteMethodException $exception) {
        $output = $exception->getMessage();
        require _VIEWS . "Errors/Velsym/RouteMethodException.view.php";
        die();
    }

    http_response_code($response->getResponseCode());
    $response->applyHeaders();
    echo $response->getBody();
    $rendered = true;
}

if(!$rendered)
{
    http_response_code(Response::CODE_CLIENT_NOT_FOUND);
    require _VIEWS . "Errors/not_found.view.php";
}
