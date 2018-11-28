<?php

namespace App\DesignPartterns\ChainOfResponsibility;

use App\DesignPartterns\ChainOfResponsibility\HelpInterface;

class FrontEnd implements HelpInterface
{
    const FRONT_END_HELP = 1;
    public $successor;
    public function __construct(HelpInterface $s)
    {
        $this->successor = $s;
    }
    public function getHelp(int $helpConstant)
    {
        if ($helpConstant != self::FRONT_END_HELP) {
            $this->successor->getHelp($helpConstant);
        } else {
            echo 'This is the front end. Don’t you like it?';
        }
    }
}
