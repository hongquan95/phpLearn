<?php

namespace App\DesignPartterns\Facade;

use App\DesignPartterns\Facade\DifficultProduct;

class SimpleProductFacade
{
    public $difficultProduct;
    public function __construct()
    {
        $this->difficultProduct = new DifficultProduct();
    }
    public function setName(string $name)
    {
        $len = strlen($name);
        if ($len > 0) $this->difficultProduct->setFirst($name[0]);
        if ($len > 1) $this->difficultProduct->setTwo($name[1]);
        if ($len > 2) $this->difficultProduct->setThree($name[2]);
        if ($len > 3) $this->difficultProduct->setFour($name[3]);
        if ($len > 4) $this->difficultProduct->setFive($name[4]);
        if ($len > 5) $this->difficultProduct->setSix($name[5]);
        if ($len > 6) $this->difficultProduct->setSeven($name[6]);
    }
    public function getName()
    {
        return $this->difficultProduct->getName();
    }
}
