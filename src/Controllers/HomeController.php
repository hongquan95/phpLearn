<?php

namespace App\Controllers;

use App\Models\User;
use App\Repositories\UserRepository;

class HomeController
{
    public function actionIndex()
    {
        return (new User)->show();
    }
}
