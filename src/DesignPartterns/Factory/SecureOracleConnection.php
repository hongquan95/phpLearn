<?php

namespace App\DesignPartterns\Factory;

use App\DesignPartterns\Factory\SecureFactory;

class SecureOracleConnection extends SecureFactory
{
    public function description()
    {
        return 'Secure Oracle';
    }
}
