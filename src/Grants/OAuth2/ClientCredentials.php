<?php

namespace Tylercd100\Credentials\Grants\OAuth2;

abstract class ClientCredentials extends OAuth2
{
    public function __construct($client_id, $client_secret, $token_url, $scope)
    {
        parent::__construct("client_credentials", $client_id, $client_secret, $token_url, $scope);
    }
}

