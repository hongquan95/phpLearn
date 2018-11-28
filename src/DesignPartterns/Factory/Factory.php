<?php

namespace App\DesignPartterns\Factory;

use App\DesignPartterns\Factory\FirstFactory;
use App\DesignPartterns\Factory\SecureFactory;

class Factory
{
    public function run()
    {
        $factory = new FirstFactory('Oracle');
        $connection = $factory->createConnection();
        echo $connection->description() .PHP_EOL;

        $secureFactory = new SecureFactory();
        $secureConnection = $secureFactory->createConnection('Oracle');
        echo $secureConnection->description();
    }
}
