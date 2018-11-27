<?php

namespace App\OOP\Inherity;

use App\OOP\Inherity\GoInterface;

class GoByDriving implements GoInterface
{
    public function go()
    {
        echo 'Driving!';
    }
}