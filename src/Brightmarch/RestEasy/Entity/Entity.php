<?php

namespace Brightmarch\RestEasy\Entity;

abstract class Entity
{

    public function __construct()
    {
    }

    public function enable()
    {
        if (property_exists($this, 'status')) {
            $this->status = 1;
        }

        return $this;
    }

    public function disable()
    {
        if (property_exists($this, 'status')) {
            $this->status = 0;
        }

        return $this;
    }

    public function isPersisted()
    {
        if (property_exists($this, 'id')) {
            return ($this->id > 0);
        }

        return false;
    }

    public function isEnabled()
    {
        if (property_exists($this, 'status')) {
            return (1 === (int)$this->status);
        }

        return false;
    }

    public static function enabledFlag()
    {
        return 1;
    }

    public static function disabledFlag()
    {
        return 0;
    }

}
