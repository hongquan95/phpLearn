<?php

namespace App\DesignPartterns\Factory;

use App\DesignPartterns\Factory\SecureFactory;

class SecureMySqlConnection extends SecureFactory
{
    public function description()
    {
        return 'Secure Mysql';
    }
}