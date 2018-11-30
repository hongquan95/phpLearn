<?php

namespace  App\DesignPartterns\Adapter;

use App\DesignPartterns\Adapter\Ace;
use App\DesignPartterns\Adapter\AceToAcmeAdapter;

class Adapter
{
    public function run()
    {
        $ace = new Ace;
        $ace->setName('Quan Tran');
        $adapter = new AceToAcmeAdapter($ace);
        echo "Customer’s first name: " . $adapter->getFirstName() . PHP_EOL;
        echo "Customer’s last name: " . $adapter->getLastName();

    }
}
