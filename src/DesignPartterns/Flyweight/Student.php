<?php

namespace App\DesignPartterns\Flyweight;

class Student
{
    public $name;
    public $id;
    public $score;
    public $averageScore;
    public function __construct(int $averageScore)
    {
        $this->averageScore = $averageScore;
    }
    public function setScore(int $score)
    {
        $this->score = $score;
    }
    public function setId(int $id)
    {
        $this->id = $id;
    }
    public function setName(string $name)
    {
        $this->name = $name;
    }
    public function getScore()
    {
        return $this->score;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getStanding()
    {
        return (float) ($this->score / $this->averageScore - 1.0) * 100.0;
    }

}
