<?php

namespace App\DesignPartterns\Singleton;

use App\DesignPartterns\Singleton\Database;

class Singleton
{
    public function run()
    {
        $singleton1 = Database::getInstance('user');
        echo "This is the " . $singleton1->getName() . " database." . PHP_EOL;

        $singleton2 = Database::getInstance('boss');


        echo "This is the " . $singleton2->getName() . " database.";
    }
}
