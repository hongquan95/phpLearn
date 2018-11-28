<?php

namespace App\DesignPartterns\Observer;

use App\DesignPartterns\Observer\ObserverInterface;


interface SubjectInterface
{
    public function registerObserver(ObserverInterface $observer);
    public function notifyObserver();
    public function removeObserver(ObserverInterface $observer);
}