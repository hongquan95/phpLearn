<?php

namespace  App\DesignPartterns\Adapter;

interface AcmeInterface
{
    public function getFirstName();
    public function setFirstName($firstName);
    public function getLastName();
    public function setLastName($lastName);
}
