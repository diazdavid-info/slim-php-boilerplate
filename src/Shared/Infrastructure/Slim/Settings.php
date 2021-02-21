<?php

namespace App\Shared\Infrastructure\Slim;

class Settings
{
    private array $settings;

    public function __construct(array $settings)
    {
        $this->settings = $settings;
    }

    public function get(string $key = ''): bool
    {
        return (empty($key)) ? false : $this->settings[ $key ];
    }
}