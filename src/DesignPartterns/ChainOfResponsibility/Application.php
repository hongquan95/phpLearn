<?php

namespace App\DesignPartterns\ChainOfResponsibility;

use App\DesignPartterns\ChainOfResponsibility\HelpInterface;

class Application implements HelpInterface
{
    public function getHelp(int $helpConstant)
    {
        echo 'This is the MegaGigaCo application.';
    }
}
