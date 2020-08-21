<?php

class Animal {
  private $name;
  private $age;
  private static $type;

  function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }
  public function walk() {
    echo $this->name . "is walking";
  }

  function __call($name, $args){
    if($name == "talk"){
      switch(count($args)){
        case 0:
          return $this->name . " is talking";
        break;
      }
    }
  }

  public function setName($name){
    $this->name = $name;
  }
  public function getName(){
    return $this->name;
  }

  public function setAge($age){
    $this->age = $age;
  }

  public function getAge(){
    echo $this->age;
  }
  public static function setType($type){
    self::$type = $type;
  }
  public static function getType(){
    echo self::$type;
  }
}

class Lion extends Animal {
  private $numberOfPreys;

  function __construct($name, $age, $numberOfPreys){
    parent::__construct($name, $age);
    $this->numberOfPreys = $numberOfPreys;
  }
  public function setPreys($number){
    $this->numberOfPreys = $number;
  }

  public function getPreys(){
    echo $numberOfPreys;
  }
  public function walk(){
    return $this->name . " is also walking";
  }

  function __call($name, $args){
    if($name == "talk"){
      switch(count($args)){
        case 0:
          return $this->getName() . " is Roaring";
        break;
        case 1:
          return $this->getName() . " is " . $args[0];
        break;
      }
    }
  }
}

$lion = new Lion("Simba", 24, 4);

echo $lion->talk("ROOOAR");
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
var_dump($lion);