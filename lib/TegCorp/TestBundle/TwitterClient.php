<?php

namespace TegCorp\TestBundle;

class TwitterClient
{
    private $clientId;
    private $clientSecret;

    public function __construct(int $clientId, string $clientSecret)
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
    }

    public function get()
    {
      dd($this->clientId);

        return;
        dd($this->clientId, $this->clientSecret);
    }
}
