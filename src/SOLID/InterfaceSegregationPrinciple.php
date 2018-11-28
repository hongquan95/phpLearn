<?php

interface ShapeInterface
{
    public function area();
    public function setLength($length);
    public function setWidth($Width);
}
interface SolidShapeInterface
{
    public function volume();
    public function setHeight($height);
}
interface ManageShapeInterface
{
    public function calculate();
}

class Square implements ShapeInterface, ManageShapeInterface
{
    public $length;
    public $width;
    public function setLength($length)
    {
        $this->length = $length;
    }
    public function setWidth($width)
    {
        $this->width = $width;
    }
    public function calculate()
    {
        return $this->area();
    }
    public function area()
    {
        return $this->width * $this->length;
    }
}

class Cuboid extends Square implements ShapeInterface, SolidShapeInterface, ManageShapeInterface
{
    public $length;
    public $width;
    public $height;
    public function setLength($length)
    {
        $this->length = $length;
    }
    public function setWidth($width)
    {
        $this->width = $width;
    }
    public function calculate()
    {
        return $this->volume();
    }
    public function setHeight($height)
    {
        $this->height = $height;
    }
    public function volume()
    {
        return $this->width * $this->length * $this->height;
    }
    public function area()
    {
        return parent::area() * 2 + $this->length * $this->height * 2 + $this->height * $this->width * 2;
    }
}

// Calucate area Square.
// $square = new Square;
// $square->setWidth(5);
// $square->setLength(5);
// echo $square->calculate();

// Calucate volume Cuboid.
$cuboid = new Cuboid;
$cuboid->setWidth(5);
$cuboid->setLength(5);
$cuboid->setHeight(5);
echo $cuboid->area();
