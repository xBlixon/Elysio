<?php

use Elysio\Http\Processable;
use Elysio\Http\Request;
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
        echo $response->getBody();
        $rendered = true;
    }
}
if(!$rendered)
{
    require _VIEWS . "default.view.php";
}
