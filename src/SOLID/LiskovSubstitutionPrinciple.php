<?php

interface Quadrilateral
{
  public function setHeight($h);
  public function setWidth($w);
  public function getArea();
}

class Rectangle implements Quadrilateral
{
    public $width;
    public $height;

    public function setWidth($w) { $this->width = $w; }
    public function setHeight($h) { $this->height = $h; }
    public function getArea() { return $this->height * $this->width; }
}
class Square implements Quadrilateral
{
  public function setWidth($w) { $this->width = $w; $this->height = $w; }
  public function setHeight($h) { $this->height = $h; $this->width = $h; }
  public function getArea() { return $this->height * $this->width; }
}

$rectangle = new Square();
$rectangle->setWidth(7);
$rectangle->setHeight(3);
echo $rectangle->getArea(); // 21
