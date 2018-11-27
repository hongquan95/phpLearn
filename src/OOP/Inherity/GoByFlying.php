<?php

namespace App\OOP\Inherity;

use App\OOP\Inherity\GoInterface;

class GoByFlying implements GoInterface
{
    public function go()
    {
        echo 'Flying!';
    }
}