<?php

namespace Tylercd100\Credentials\Keys;

abstract class Basic extends Key
{
    public $username;
    public $password;

    public function __construct($client_company_id, $username, $password)
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