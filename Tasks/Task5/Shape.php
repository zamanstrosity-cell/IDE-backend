<?php

class Shape {
  const SHAPE_TYPE = 1;
  public $name;
  protected $length, $width;
  private $id;

  function __construct($length, $width){
    $this->length = $length;
    $this->width = $width;
    $this->id = uniqid();
  }
  function getName(){
    echo $this->name;
  }
  function setName($name){
    $this->name = $name;
  }
  public function area(){
    return $this->length * $this->width;
  }
  public static function getTypeDescription(){
    echo "Type: " . $this->SHAPE_TYPE;
  }
  public function getFullDescription() {
    echo "Shape $this->id: $this->name - $this->length x $this->width";
  }
}

