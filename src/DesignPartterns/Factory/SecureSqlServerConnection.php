<?php

namespace App\DesignPartterns\Factory;

use App\DesignPartterns\Factory\SecureFactory;

class SecureSqlServerConnection extends SecureFactory
{
    public function description()
    {
        return 'Secure SqlServer';
    }
}
