<?php

namespace Arbon\Credentials\Keys;

class Basic extends Key
{
    public $username;
    public $password;

    public function __construct($username, $password, $client_company_id = null)
    {
        $this->username = $username;
        $this->password = $password;
        parent::__construct($client_company_id);
    }

    public function getUserName()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getAccountIdentifier()
    {
        return $this->client_company_id; 
    }
}