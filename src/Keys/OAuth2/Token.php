<?php

namespace Arbon\Credentials\Keys\OAuth2;

use Arbon\Credentials\Keys\Key;

class Token extends Key 
{
    public $access_token;
    public $refresh_token;
    public $expires_in;
    public $token_type;
    public $scope;

    public function __construct($access_token, $expires_in, $refresh_token = null, $token_type = "bearer", $scope = null)
    {
        $this->access_token = $access_token;
        $this->refresh_token = $refresh_token;
        $this->expires_in = $expires_in;
        $this->token_type = $token_type;
        $this->scope = $scope;
    }

    public function getAccessToken()
    {
        return $this->access_token;
    }

    public function getRefreshToken()
    {
        return $this->refresh_token;
    }

    public function getExpiresIn()
    {
        return $this->expires_in;
    }

    public function getTokenType()
    {
        return $this->token_type;
    }

    public function getScope()
    {
        return $this->scope;
    }
}

