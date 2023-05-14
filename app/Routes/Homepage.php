<?php
namespace Routes;

use Elysio\Http\ANY;
use Elysio\Http\GET;
use Elysio\Http\POST;
use Elysio\Http\Processable;
use Elysio\Http\Request;
use Elysio\Http\Route;

#[ANY]
#[GET]
#[POST]
class Homepage extends Route implements Processable
{
    public function process(): void
    {
        $request = Request::getInstance();
        $postMode = ($request->method === 'POST' ? "POST MODE!" : NULL);

        $this->render(
            "homepage.view.php",
            [
                'postMode' => $postMode,
                'query' => $request->params
            ]);
    }
}

return new Homepage("/home", "Home");
