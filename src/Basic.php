<?php

namespace Tylercd100\Credentials;

class Basic extends Credentials
{
    public function getUserName() {
        return $this->getKey()->username;
    }

    public function getPassword() {
        return $this->getKey()->password;
    }    
}