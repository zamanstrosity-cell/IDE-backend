<?php

require_once('./Shape.php');

class Circle extends Shape {
  const SHAPE_TYPE = 3;
  protected $radius;

  function __construct($radius){
    parent::__construct($length, $width);
    $this->radius = $radius;
  }
  public function area(){
    return radius**2 * pi();
  }
  public function getFullDescription() {
    return "Circle $this->id : $this->name - $this->radius";
  }
}