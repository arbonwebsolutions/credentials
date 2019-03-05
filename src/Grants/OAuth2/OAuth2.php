<?php

namespace Tylercd100\Credentials\Grants\OAuth2;

use Tylercd100\Credentials\Grants\Grant;
use Tylercd100\Credentials\Keys\OAuth2\Token;
use GuzzleHttp\Client;

abstract class OAuth2 extends Grant
{
    public $client_id;
    public $client_secret;
    public $grant_type;
    public $scope;
    public $token_url;

    public function __construct($grant_type, $client_id, $client_secret, $token_url, $scope)
    {
        $this->grant_type = $grant_type;
        $this->client_id = $client_id;
        $this->client_secret = $client_secret;
        $this->token_url = $token_url;
        $this->scope = $scope;
    }

    public function run($options = [])
    {
        $client = new Client(array_merge([
            'verify' => false
        ], $options));

        $response = $client->post($this->getTokenUrl(), [
            "client_id" => $this->getClientId(),
            "client_secret" => $this->getClientSecret(),
            "grant_type" => $this->getGrantType(),
            "scope" => $this->getScope(),
        ]);

        $d = json_decode($response->getBody(true)->getContents());

        return new Token($d->access_token, $d->expires_in, $d->refresh_token, $d->token_type, $d->scope);
    }

    public function getClientId()
    {
        return $this->client_id;
    }

    public function getClientSecret()
    {
        return $this->client_secret;
    }

    public function getTokenUrl()
    {
        return $this->token_url;
    }

    public function getScope()
    {
        return $this->scope;
    }

    public function getGrantType()
    {
        return $this->grant_type;
    }
}

