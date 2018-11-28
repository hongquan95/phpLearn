<?php

namespace App\DesignPartterns\Decorator;

use App\DesignPartterns\Decorator\Computer;
use App\DesignPartterns\Decorator\Disk;
use App\DesignPartterns\Decorator\Monitor;

class Decorator
{
    public function run()
    {
        $a = new Computer();
        echo $a->description() . PHP_EOL;

        $a = new Disk($a);
        echo $a->description() . PHP_EOL;

        $a = new Monitor($a);
        echo $a->description() . PHP_EOL;
    }
}
