<?php

namespace  App\DesignPartterns\Adapter;

use App\DesignPartterns\Adapter\AcmeInterface;

class Acme implements AcmeInterface
{
    public $firstmName;
    public $lastName;
    public function getFirstName()
    {
        return $this->firstName;
    }
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }
    public function getLastName()
    {
        return $this->lastName;
    }
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

}
