<?php

namespace App\SOLID;

use App\SOLID\Square;
use App\SOLID\Circle;
use App\SOLID\AreaCalculator;
use App\SOLID\VolumeCalculator;
use App\SOLID\SumCalculatorOutputter;
class RunSolid
{
    public function run()
    {
        $shapes = [
            new Circle(4),
            new Circle(5),
            new Square(4),
        ];
        // $areas = new AreaCalculator($shapes);
        // $ouput = new SumCalculatorOutputter($areas);

        // echo $ouput->JSON() . PHP_EOL;
        // echo $ouput->HTML() . PHP_EOL;

        $areas = new AreaCalculator($shapes);
        // $volumes = new VolumeCalculator($shapes);

        $output = new SumCalculatorOutputter($areas);
        // $output2 = new SumCalculatorOutputter($volumes);
        echo $output->HTML() . PHP_EOL;
    }
}