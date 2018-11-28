<?php

namespace App\DesignPartterns\Factory;

abstract class Connection
{
    public function __construct()
    {

    }
    public function description()
    {
        return 'Generic';
    }
}