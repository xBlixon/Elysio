<?php

use Elysio\Http\Processable;
use Elysio\Http\Request;
use Elysio\Http\Response;
use Elysio\Http\Route;

$request = Request::getInstance();

$files = array_diff(scandir(_ROUTES), array('.', '..'));
$rendered = false;
foreach ($files as $routeFile)
{
    $fullPath = _ROUTES . OS_SLASH . $routeFile;
    $route = (require $fullPath); /* @var Processable|Route $route */
    if ($request->doesRouteMatch($route))
    {
        $response = $route->process();
        $response->applyHeaders();
        http_response_code($response->getResponseCode());
        echo $response->getBody();
        $rendered = true;
    }
}
if(!$rendered)
{
    http_response_code(Response::CODE_CLIENT_NOT_FOUND);
    require _VIEWS . "Errors/not_found.view.php";
}
