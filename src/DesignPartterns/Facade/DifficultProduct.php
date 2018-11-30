<?php

namespace App\DesignPartterns\Facade;

class DifficultProduct
{
    public $name;
    public function __construct()
    {
        $this->name = '        ';
    }
    public function setFirst(string $c)
    {
        $this->name[0] = $c;
    }
    public function setTwo(string $c)
    {
        $this->name[1] = $c;
    }
    public function setThree(string $c)
    {
        $this->name[2] = $c;
    }
    public function setFour(string $c)
    {
        $this->name[3] = $c;
    }
    public function setFive(string $c)
    {
        $this->name[4] = $c;
    }
    public function setSix(string $c)
    {
        $this->name[5] = $c;
    }
    public function setSeven(string $c)
    {
        $this->name[6] = $c;
    }
    public function getName()
    {
        return $this->name;
    }
}
