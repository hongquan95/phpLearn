<?php

namespace App\DesignPartterns\Factory;

use App\DesignPartterns\Factory\Connection;

class MySqlConnection extends Connection
{
    public function description()
    {
        return 'MySql';
    }
}
