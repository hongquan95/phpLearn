<?php

namespace App\DesignPartterns\Builder;

interface RobotInterface
{
    public function addStart();
    public function addGetParts();
    public function addAssemble();
    public function addTest();
    public function addStop();
    public function getRobot();
}
