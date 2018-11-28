<?php

namespace App;

use App\Controllers\HomeController;
use App\Repositories\UserRepository;

class Psr4
{
    public function run()
    {
        $homeController = new HomeController;
        $userRepository = new UserRepository;

        print_r($homeController->actionIndex());
        $userRepository->hello();
    }
}
