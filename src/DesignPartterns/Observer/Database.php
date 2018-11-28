<?php

namespace App\DesignPartterns\Observer;

use App\DesignPartterns\Observer\SubjectInterface;
use App\DesignPartterns\Observer\ObserverInterface;


class Database implements SubjectInterface
{
    private $observers;
    private $operation;
    private $record;

    public function __construct()
    {
        $this->observers = [];
    }
    public function registerObserver(ObserverInterface $observer)
    {
        $this->observers[] = $observer;
    }
    public function removeObserver(ObserverInterface $observer)
    {
        var_dump($this->observers[1] == $observer); die();
        foreach ($this->observers as $index => $item) {
            if ($item === $observer) {
                unset($this->observers[$index]);
            }
        }
    }
    public function editRecord(string $operation, string $record)
    {
        $this->operation = $operation;
        $this->record = $record;
        $this->notifyObserver();
    }
    public function notifyObserver()
    {
        foreach ($this->observers as $observer)
        {
            $observer->update($this->operation, $this->record);
        }
    }
}