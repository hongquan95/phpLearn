<?php

namespace App\Ioc;

use App\Ioc\LoggerInterface;

class StandardLogger implements LoggerInterface
{
    public function info($message) {
        echo 'Standard log message: ' . $message;
    }
}
