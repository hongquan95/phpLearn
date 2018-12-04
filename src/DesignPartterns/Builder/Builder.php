<?php

namespace App\DesignPartterns\Builder;

use App\DesignPartterns\Builder\CookieRobot;

class Builder
{
    /**
     * @var RobotInterface
     */
    public $builder;
    /**
     * @var RobotClientInterface
     */
    public $robot;
    public function run()
    {
        $c = readline("Do you want a cookie robot [c] or an automotive one [a]?");
        if ($c == 'c') {
            $this->builder =  new CookieRobot;
        }

        // Start construction process.
        // var_dump($this); die();
        $this->builder->addStart();
        $this->builder->addTest();
        $this->builder->addAssemble();
        $this->builder->addStop();

        $this->robot = $this->builder->getRobot();
        $this->robot->go();
    }
}
