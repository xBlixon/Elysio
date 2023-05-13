<?php

use Elysio\Http\Request;
use Elysio\Http\Route;

$request = Request::getInstance();

$files = array_diff(scandir(_ROUTES), array('.', '..'));
foreach ($files as $routeFile)
{
    $fullPath = _ROUTES . OS_SLASH . $routeFile;
    $route = (require $fullPath); /* @var Route $route */
    if ($request->doesRouteMatch($route)) $route->render();
    else require _VIEWS . "default.view.php";
}
