<?php

namespace App\DesignPartterns\Factory;

abstract class ConnectionFactory
{
    protected abstract function createConnection(string $type);
}
