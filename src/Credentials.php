<?php

namespace Tylercd100\Credentials;

abstract class Credentials
{
    protected $grant = null;
    protected $key = null;
    const KEYS = [Keys\Key::class];
    const GRANTS = [];

    public function __construct(Keys\Key $key = null, Grants\Grant $grant = null)
    {
        $this->grant = $grant;
        $this->setKey($key);
    }

    public function refresh(Grants\Grant $grant = null)
    {
        $grant = !empty($grant) ? $grant : $this->grant;
        
        if ($grant) {
            $this->setKey($grant->run());
        }

        return $this;
    }

    public function getKey()
    {
        if (!$this->key) {
            $this->key = $this->refresh();
        }
        return $this->key;
    }

    public function getGrant()
    {
        return $this->grant;
    }

    public function setKey(Keys\Key $key = null)
    {
        $this->key = null;
        foreach(static::KEYS as $approved) {
            if (is_subclass_of($key, $approved))
                $this->key = $key;
        }
        return $this;
    }

    public function setGrant(Grants\Grant $grant = null)
    {
        $this->grant = null;
        foreach(static::GRANTS as $approved) {
            if (is_subclass_of($grant, $approved))
                $this->grant = $grant;
        }
        return $this;
    }
}