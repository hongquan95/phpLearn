<?php

namespace App\DesignPartterns\Builder;

use App\DesignPartterns\Builder\CookieRobotClient;

class CookieRobot implements RobotInterface
{
    /**
     * @var CookieRobotClient
     */
    public $robot;
    /**
     * @var array
     */
    public $action;
    public function __construct()
    {
        $this->robot = new CookieRobotClient;
        $this->action = [];
    }
    public function addStart()
    {
        $this->action[] = 1;
        // var_dump($this); die();
    }
        public function addGetParts()
        {
        $this->action[] = 2;
    }
        public function addAssemble()
        {
        $this->action[] = 3;
    }
        public function addTest()
        {
        $this->action[] = 4;
    }
        public function addStop()
        {
        $this->action[] = 5;
    }
    public function getRobot()
    {
        $this->robot->loadActions($this->action);
        return $this->robot;
    }
}
