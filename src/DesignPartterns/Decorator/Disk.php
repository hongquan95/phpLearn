<?php

namespace App\DesignPartterns\Decorator;

use App\DesignPartterns\Decorator\Computer;
use App\DesignPartterns\Decorator\ComponentDecorator;

class Disk extends ComponentDecorator
{
    public function __construct(Computer $computer)
    {
        $this->computer = $computer;
    }
    public function description()
    {
        return $this->computer->description() . ' with a disk!';
    }
}
