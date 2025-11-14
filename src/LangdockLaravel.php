<?php

namespace Hwkdo\LangdockLaravel;

use Illuminate\Support\Facades\Http;
use InvalidArgumentException;
use RuntimeException;

class LangdockLaravel
{
    protected string $api_key;

    protected string $api_url;

    public function __construct()
    {
        $this->api_key = config('langdock-laravel.api_key');
        $this->api_url = config('langdock-laravel.api_url');
    }

    public function getApiKey(): string
    {
        return $this->api_key;
    }

    /**
     * Get headers for API requests
     */
    protected function getHeaders(): array
    {
        return [
            'Api-Key' => $this->api_key,
            'Accept' => 'application/json',
        ];
    }

   
}
