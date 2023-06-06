<?php
namespace Routes;

use Elysio\Http\Response;
use Elysio\Http\Route;

class Homepage extends Route
{
    public function GET(): Response
    {
        if(isset($this->request->params['json']))
        {
            return $this->JSON(['hi'=>'hello']);
        }

        if(isset($this->request->params['redirect']))
        {
            return $this->redirectTo("/redirected");
        }

        $this->response->addHeaders("Some: Header");
        $this->response->addHeaders("Another: Header");
        return $this->render("homepage.view.php", [
            'method' => 'GET',
            'query' => $this->request->params
        ]);
    }

    public function POST(): Response
    {
        return $this->render("homepage.view.php", [
            'method' => 'POST',
            'query' => $this->request->params
        ]);
    }
}

return new Homepage("/home", "Home");
