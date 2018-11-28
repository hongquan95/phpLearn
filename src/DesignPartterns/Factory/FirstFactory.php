<?php

namespace App\DesignPartterns\Factory;

use App\DesignPartterns\Factory\MySqlConnection;
use App\DesignPartterns\Factory\OracleConnection;
use App\DesignPartterns\Factory\SqlServerConnection;

class FirstFactory
{
    public $type;
    public function __construct(string $type)
    {
        $this->type = $type;
    }
    public function createConnection()
    {
        switch ($this->type) {
            case 'Oracle': return new OracleConnection();
            case 'Mysql': return new MySqlConnection();
            default: return new SqlServerConnection();
        }
    }
}
