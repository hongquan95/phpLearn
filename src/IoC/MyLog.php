<?php

namespace App\Ioc;

use App\Ioc\LoggerInterface;

class MyLog
{
    public $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function info($message)
    {
        $this->logger->info($message);
    }
}
