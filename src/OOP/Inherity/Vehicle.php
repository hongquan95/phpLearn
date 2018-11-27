<?php

namespace App\OOP\Inherity;

use App\OOP\Inherity\GoInterface;


abstract class Vehicle
{
    // /**
    //  * @var GoInterface $goAlgorithm
    //  */
    protected  $goAlgorithm;

    public function setAlgorithm(GoInterface $goAlgorithm)
    {
        $this->goAlgorithm = $goAlgorithm;
    }
    public function go()
    {
        $this->goAlgorithm->go();
    }
}

