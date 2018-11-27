<?php

namespace App\SOLID;

use App\SOLID\Circle;
use App\SOLID\Square;

class AreaCalculator
{
    public $shapes;

    public function __construct($shapes = [])
    {
        $this->shapes = $shapes;
    }

    public function sum()
    {
        $sum = 0;
        foreach ($this->shapes as $shape) {
            if (!is_a($shape, 'App\SOLID\ShapeInterface')) {
                // throw new \Exception("Fail");
                echo ("Fail");
            }
            $area[] = $shape->area();
        }
        return array_sum($area);
    }
}