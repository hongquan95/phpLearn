<?php

namespace App\DesignPartterns\Observer;

use App\DesignPartterns\Observer\ObserverInterface;

class Archiver implements ObserverInterface
{
    public function update(string $operation, string $record)
    {
        echo 'The Archiver says a' . $operation .  'operation was performed on' . $record . PHP_EOL;
    }
}
