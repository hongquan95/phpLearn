<?php

namespace App\DesignPartterns\Template;

use App\DesignPartterns\Template\RobotTemplate;

class AutomotiveRobot extends RobotTemplate
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
        echo 'Getting a carburetor....';
    }
    public function assemble()
    {
        echo 'Installing the carburetor....';
    }
    public function test()
    {
        echo 'Revving the engine....';
    }
}
