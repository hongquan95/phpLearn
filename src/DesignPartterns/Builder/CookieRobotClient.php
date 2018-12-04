<?php

namespace App\DesignPartterns\Builder;

use App\DesignPartterns\Builder\RobotClientInterface;

class CookieRobotClient implements RobotClientInterface
{
    /**
     * @var array
     */
    public $action;
    public function __construct()
    {}
    public function loadActions(array $a)
    {
        $this->action = $a;
    }
    public function go()
    {
        foreach ($this->action as $action)
        {
            switch ($action) {
                case 1:
                    $this->start();
                    break;
                case 2:
                    $this->getParts();
                    break;
                case 3:
                    $this->assemble();
                    break;
                case 4:
                    $this->test();
                    break;
                case 5:
                    $this->stop();
                    break;
            }
        }
    }
    public function start()
    {
        echo "Starting....";
    }
    public function getParts()
    {
        echo "Getting flour and sugar....";
    }
    public function assemble()
    {
        echo "Baking a cookie....";
    }
    public function test()
    {
        echo "Crunching a cookie....";
    }
    public function stop()
    {
        echo "Stopping....";
    }
}
