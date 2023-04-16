<?php

trait ServerArrayAccessTrait
{
    private array $server_array;
    public function get(string $key): ?string
    {
        return $this->server_array[$key] ?? null;
    }

    public function has($key): bool
    {
        return isset($this->server_array[$key]);
    }
}