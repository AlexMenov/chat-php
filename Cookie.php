<?php

class Cookie
{

    use ServerArrayAccessTrait;
    use MutableServerArrayTrait {
        delete as private deleteTrait;
    }

    public function __construct()
    {
        $this->server_array = &$_COOKIE;
        $this->add('theme', null);
    }

    public function delete(string $key): void
    {
        setcookie($key, null, -1);
        $this->deleteTrait($key);
    }

    public function clear(): void
    {
        foreach ($this->server_array as $cookie_element) {
            $this->delete($cookie_element);
        }
    }
}