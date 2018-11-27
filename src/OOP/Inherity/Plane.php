<?php

namespace App\OOP\Inherity;

use App\OOP\Inherity\Vehicle;
use App\OOP\Inherity\GoByFlying;

class Plane extends Vehicle
{
    public function __construct()
    {
        $this->setAlgorithm(new GoByFlying);
    }
}
