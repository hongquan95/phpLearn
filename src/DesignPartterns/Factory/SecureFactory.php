<?php

namespace App\DesignPartterns\Factory;
use App\DesignPartterns\Factory\SecureMySqlConnection;
use App\DesignPartterns\Factory\SecureOracleConnection;
use App\DesignPartterns\Factory\SecureSqlServerConnection;
use App\DesignPartterns\Factory\ConnectionFactory;

class SecureFactory extends ConnectionFactory
{
    public function createConnection(string $type)
    {
        switch ($type) {
            case 'Oracle': return new SecureOracleConnection();
            case 'Mysql': return new SecureMySqlConnection();
            default: return new SecureSqlServerConnection();
        }
    }
}
