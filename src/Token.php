<?php

namespace Tylercd100\Credentials;

class Token extends Credentials
{
    public function getToken() {
        return $this->getKey()->token;
    }
}