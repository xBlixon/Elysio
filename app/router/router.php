<?php
$files = array_diff(scandir(_ROUTES), array('.', '..'));

foreach ($files as $routeFile)
{
    $fullPath = _ROUTES . DIRECTORY_SEPARATOR . $routeFile;
    /* @var \Elysio\Route $route */
    $route = (require $fullPath);
    if ($route->getUrl() === $_SERVER['REQUEST_URI']) $route->render();
}