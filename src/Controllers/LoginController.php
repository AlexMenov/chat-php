<?php

class LoginController
{
    public function mainAction(): void
    {
        $post = new Post();
        $session = new Session();
        $cookie = new Cookie();
        $userLogin = $post->get('user_login');
        $login_key = 'login';
        $theme = 'theme';

        if (!$session->has($login_key) && $userLogin) {
            $session->add($login_key, $userLogin);
            header("Location: /");
        }
        $view = new View();
        $view->renderTemplate('login', [$theme => $cookie->get($theme)]);
    }
}