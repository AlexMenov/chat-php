<?php

class ChatController
{
    public function mainAction(): void
    {
        $session = new Session();
        $cookie = new Cookie();
        $messagesStorages = new MessagesStorage();
        $post = new Post();
        $login_key = 'login';
        $userMessage = $post->get('user_message');
        $chat = 'chat';
        $theme = 'theme';
        $is_logged_in = 'is_logged_in';
        $messages = 'messages';

        if ($session->has($login_key) && $userMessage) {
            switch ($userMessage):
                case 'set_dark_theme':
                    $cookie->add('theme', 'gray');
                    break;
                case 'set_light_theme':
                    $cookie->delete('theme');
                    break;
                case 'logout':
                    $session->delete($login_key);
                    break;
                default:
                    $messagesStorages->addMessage([
                        'login' => $session->get($login_key),
                        'message' => $userMessage,
                        'message_time' => time()
                    ]);
            endswitch;
        }
        $view = new View();
        $view->renderTemplate($chat, [$theme => $cookie->get($theme),
                                      $messages => $messagesStorages->getMessages(),
                                      $is_logged_in => $session->has($login_key)]);
    }
}