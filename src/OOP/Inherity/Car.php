<?php

namespace App\OOP\Inherity;

use App\OOP\Inherity\Vehicle;
use App\OOP\Inherity\GoByDriving;


class Car extends Vehicle
{
    public function __construct()
    {
        $this->setAlgorithm(new GoByDriving);
    }
}
