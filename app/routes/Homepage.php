<?php

use Elysio\Http\ANY;
use Elysio\Http\GET;
use Elysio\Http\POST;
use Elysio\Http\Route;

#[ANY]
#[GET]
#[POST]
class Homepage extends Route{}
$route = new Homepage("/home", "homepage.view.php");

return $route;
