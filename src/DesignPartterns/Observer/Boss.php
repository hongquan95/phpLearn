<?php

namespace App\DesignPartterns\Observer;

use App\DesignPartterns\Observer\ObserverInterface;

class Boss implements ObserverInterface
{
    public function update(string $operation, string $record)
    {
        echo 'The Boss says a' . $operation .  'operation was performed on' . $record . PHP_EOL;
    }
}