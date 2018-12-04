<?php

namespace App\DesignPartterns\Iterator;

class DivisionIterator
{
    /**
     * @var array
     */
    private $VPs;
    /**
     * @var int
     */
    private $location;
    public function __construct($VPs)
    {
        $this->VPs = $VPs;
        $this->location = 0;
    }
    public function next()
    {
        return $this->VPs[$this->location++];
    }
    public function hasNext()
    {
        if (($this->location < count($this->VPs) && !is_null($this->VPs[$this->location])))
        {
            return true;
        }
        return false;
    }
    public function remove()
    {
    }
}
