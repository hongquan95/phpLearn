<?php

namespace App\DesignPartterns\Template;

abstract class RobotTemplate
{
    public function go()
    {
        $this->start();
        $this->getParts();
        $this->assemble();
        $this->test();
        $this->stop();
    }
    public function start()
    {
        echo 'Starting...';
    }
    public function getParts()
    {
        echo 'Get parts...';
    }
    public function assemble()
    {
        echo 'Asembling...';
    }
    public function test()
    {
        echo 'Testing...';
    }
    public function stop()
    {
        echo 'Stopping...';
    }
}
