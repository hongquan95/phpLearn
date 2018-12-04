<?php

namespace App\DesignPartterns\Iterator;

use App\DesignPartterns\Iterator\VP;
use App\DesignPartterns\Iterator\DivisionIterator;

class Division
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var array
     */
    private $VPs;
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->VPs = [];
    }
    public function getName()
    {
        return $this->name;
    }
    public function add(string $n)
    {
        $vp = new VP($n, $this->name);
        $this->VPs[] = $vp;
    }
    public function iterator()
    {
        return new DivisionIterator($this->VPs);
    }
}
