<?php

namespace App\DesignPartterns\ChainOfResponsibility;

use App\DesignPartterns\ChainOfResponsibility\FrontEnd;
use App\DesignPartterns\ChainOfResponsibility\Application;
use App\DesignPartterns\ChainOfResponsibility\IntermediateLayer;

class ChainOfResponsibility
{
    const FRONT_END_HELP = 1;
    const INTERMEDIATE_LAYER_HELP = 2;
    const GENERAL_HELP = 3;

    public function run()
    {
        $app = new Application();
        $intermidiate = new IntermediateLayer($app);
        $frontEnd = new FrontEnd($intermidiate);
        $intermidiate->getHelp(self::GENERAL_HELP);
    }

}
