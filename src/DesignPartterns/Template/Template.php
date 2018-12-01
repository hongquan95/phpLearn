<?php

namespace App\DesignPartterns\Template;

use App\DesignPartterns\Template\CookieRobot;
use App\DesignPartterns\Template\AutomotiveRobot;

class Template
{
    public function run()
    {
        $automotiveRobot = new AutomotiveRobot('Automotive Robot');
        $cookieRobot = new CookieRobot('Cookie Robot');
        echo $automotiveRobot->getName();
        $automotiveRobot->go();
        echo PHP_EOL;
        echo PHP_EOL;
        echo $cookieRobot->getName();
        $cookieRobot->go();

    }
}
