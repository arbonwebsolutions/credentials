<?php

namespace Arbon\Credentials\Grants\OAuth2;

class ClientCredentials extends OAuth2
{
    public function __construct($client_id, $client_secret, $token_url, $scope)
    {
        parent::__construct("client_credentials", $client_id, $client_secret, $token_url, $scope);
    }
}

