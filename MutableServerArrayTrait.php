<?php

trait MutableServerArrayTrait
{

    private array $server_array;
    public function add(string $key, ?string $value): void
    {
        $this->server_array[$key] = $value;
    }

    public function delete(string $key): void
    {
        unset($this->server_array[$key]);
    }

    public abstract function clear(): void;

}