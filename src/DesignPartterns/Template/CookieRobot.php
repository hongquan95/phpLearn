<?php

namespace App\DesignPartterns\Template;

use App\DesignPartterns\Template\RobotTemplate;

class CookieRobot extends RobotTemplate
{
    private $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getParts()
    {
        echo 'Getting flour and sugar....';
    }
    public function assemble()
    {
        echo 'Baking a cookie....”';
    }
    public function test()
    {
        echo 'Crunching a cookie....';
    }
}
