<?php

namespace App\DesignPartterns\Flyweight;

use App\DesignPartterns\Flyweight\Student;

class Flyweight
{
    public function run()
    {
        $name = ['Ralph', 'Alice', 'Sam'];
        $ids = [101, 102, 103];
        $score = [45, 55, 65];
        $total = 0;
        foreach ($score as $value)
        {
            $total += $value;
        }
        $scoreAverage = $total / count($score);
        $student = new Student($scoreAverage);
        for ($i = 0; $i < count($score) ; $i++) {
            $student->setName($name[$i]);
            $student->setId($ids[$i]);
            $student->setScore($score[$i]);
            echo "Name: " . $student->getName() . PHP_EOL;
            echo "Standing: " . $student->getStanding() . PHP_EOL;
        }
    }
}
