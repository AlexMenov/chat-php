<?php

class Post
{
    use ServerArrayAccessTrait {
        get as getTrait;
    }

    public function __construct()
    {
        $this->server_array = $_POST;
    }

    public function get (string $key): ?string
    {
        $value = $this->getTrait($key);
        return $value ? htmlspecialchars($value) : null;
    }
}