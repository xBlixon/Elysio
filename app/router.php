<?php

use Elysio\Http\Processable;
use Elysio\Http\Request;

$request = Request::getInstance();

$files = array_diff(scandir(_ROUTES), array('.', '..'));
foreach ($files as $routeFile)
{
    $fullPath = _ROUTES . OS_SLASH . $routeFile;
    $route = (require $fullPath); /* @var Processable $route */
    if ($request->doesRouteMatch($route)) $route->process();
    else require _VIEWS . "default.view.php";
}
