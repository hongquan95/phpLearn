<?php

namespace App\DesignPartterns\Factory;

use App\DesignPartterns\Factory\Connection;

class SqlServerConnection extends Connection
{
    public function description()
    {
        return 'SqlServer';
    }
}