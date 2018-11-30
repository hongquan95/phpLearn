<?php

namespace App\DesignPartterns\Facade;

use App\DesignPartterns\Facade\SimpleProductFacade;

class Facade
{
    public function run()
    {
        $product = new SimpleProductFacade;
        $product->setName('printer');
        echo $product->getName();
    }
}
