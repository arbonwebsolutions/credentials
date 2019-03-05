<?php

namespace Arbon\Credentials\Keys;

abstract class Token extends Key
{
    public $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function getToken()
    {
        return $this->token;
    }
}