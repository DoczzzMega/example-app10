<?php

namespace App\Services;

class TestService
{
    public function __construct(protected array $config)
    {

    }
    public function getConfig(string $key) {
        return $this->config[$key] ?? null;
    }
}
