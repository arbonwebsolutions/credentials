<?php

namespace Arbon\Credentials;

class Basic extends Credentials
{
    public function getUserName() {
        return $this->getKey()->getUserName();
    }

    public function getPassword() {
        return $this->getKey()->getPassword();
    }    

    public function getAccountIdentifier()
    {
        return $this->getKey()->getAccountIdentifier(); 
    }
}