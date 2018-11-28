<?php

namespace App\DesignPartterns\Observer;

use App\DesignPartterns\Observer\Database;
use App\DesignPartterns\Observer\Archiver;
use App\DesignPartterns\Observer\Boss;
use App\DesignPartterns\Observer\Client;

class Observer
{
    public function run()
    {
        $database = new Database();
        $archiver = new Archiver();
        $client = new Client();
        $boss = new Boss();
        $database->registerObserver($archiver);
        $database->registerObserver($client);
        $database->registerObserver($boss);
        $database->editRecord('delete', 'record 1');
        $database->removeObserver($client);
        $database->editRecord('update', 'record 2');
    }
}
