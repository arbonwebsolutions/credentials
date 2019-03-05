<?php

namespace Arbon\Credentials;

class Token extends Credentials
{
    public function getToken() {
        return $this->getKey()->token;
    }
}