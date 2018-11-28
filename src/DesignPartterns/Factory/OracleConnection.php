<?php

namespace App\DesignPartterns\Factory;

use App\DesignPartterns\Factory\Connection;

class OracleConnection extends Connection
{
    public function description()
    {
        return 'Oracle';
    }
}
