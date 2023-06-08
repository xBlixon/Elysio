<?php

namespace Routes;

use Elysio\Http\Response;
use Elysio\Http\Route;

class Registration extends Route
{
    public function GET(): Response
    {
        return $this->render("register.view.php", [
            'flash' => $this->session->getFlash()
        ]);
    }

    public function POST(): Response
    {
        $name = empty($_POST['name']) ? "johndoe" : $_POST['name'];
        $this->session->setFlash("Your name ($name) has been already taken.");
        return $this->redirectTo("/register");
    }
}

return new Registration("/register", "Register");
