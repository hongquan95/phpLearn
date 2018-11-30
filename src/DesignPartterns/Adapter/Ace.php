<?php

namespace App\DesignPartterns\Adapter;

use App\DesignPartterns\Adapter\AceInterface;

class Ace implements AceInterface
{
    public $name;
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
}
