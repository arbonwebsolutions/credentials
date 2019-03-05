<?php

namespace Arbon\Credentials;

class OAuth2 extends Credentials
{
    public function getAccessToken()
    {
        return $this->getKey()->access_token;
    }

    public function getRefreshToken()
    {
        return $this->getKey()->refresh_token;
    }

    public function getExpiresIn()
    {
        return $this->getKey()->expires_in;
    }

    public function getTokenType()
    {
        return $this->getKey()->token_type;
    }

    public function getClientId()
    {
        return $this->getGrant()->client_id;
    }

    public function getClientSecret()
    {
        return $this->getGrant()->client_secret;
    }

    public function getTokenUrl()
    {
        return $this->getGrant()->token_url;
    }

    public function getScope()
    {
        return $this->getGrant()->scope;
    }

    public function getGrantType()
    {
        return $this->getGrant()->grant_type;
    }
}