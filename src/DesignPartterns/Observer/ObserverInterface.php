<?php

namespace App\DesignPartterns\Observer;

interface ObserverInterface
{
    public function update(string $operation, string $record);
}
