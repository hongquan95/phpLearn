<?php

namespace App\DesignPartterns\Iterator;

class VP
{
    private $name;
    private $division;
    public function __construct(string $name, string $division)
    {
        $this->name = $name;
        $this->division = $division;
    }
    public function getName()
    {
        return $this->name;
    }
    public function print()
    {
        echo "Name: " . $this->name . " Division: " . $this->division . PHP_EOL;
    }
}
