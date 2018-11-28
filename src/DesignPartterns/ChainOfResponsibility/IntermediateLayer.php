<?php

namespace App\DesignPartterns\ChainOfResponsibility;

use App\DesignPartterns\ChainOfResponsibility\HelpInterface;

class IntermediateLayer implements HelpInterface
{
    const INTERMEDIATE_LAYER_HELP = 2;
    public $successor;
    public function __construct(HelpInterface $s)
    {
        $this->successor = $s;
    }
    public function getHelp(int $helpConstant)
    {
        if ($helpConstant != self::INTERMEDIATE_LAYER_HELP) {
            $this->successor->getHelp($helpConstant);
        } else {
            echo 'This is the intermediate layer. Nice, eh?';
        }
    }
}
