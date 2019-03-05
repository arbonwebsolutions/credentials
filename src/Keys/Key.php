<?php

namespace Arbon\Credentials\Keys;

abstract class Credentials
{
    protected $client_company_id;

    public function __construct($client_company_id = null)
    {
        $this->client_company_id = $client_company_id;
    }
}

