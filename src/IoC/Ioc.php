<?php

namespace App\Ioc;

use App\Ioc\MyLog;
use App\Ioc\FileLogger;
use App\Ioc\StandardLogger;

class IoC
{
    public function run()
    {
        $myLogStandard = new MyLog(new StandardLogger);
        $myLogFile = new MyLog(new FileLogger);

        $myLogStandard->info('Hello');
        $myLogFile->info('Xin chao');
    }
}
