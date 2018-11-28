<?php

namespace App\Ioc;

use App\Ioc\LoggerInterface;

class FileLogger implements LoggerInterface
{
    public function info($message) {
        echo 'File log message: ' . $message . PHP_EOL;
    }
}
