<?php

class Router
{
    public function runRouter(): void
    {
        $session = new Session();
        $login_key = 'login';
        $is_logged_in = $session->has($login_key);
        if (!$is_logged_in) {
            $loginController = new LoginController();
            $loginController->mainAction();
        } else {
            $chatController = new ChatController();
            $chatController->mainAction();
        }
    }
}