<?php

class Calculator {
  
  public $num1,$num2;
   
  public function __construct($num1,$num2) {

    $this->num1 = $num1;
    $this->num2 = $num2;

  }

  public function add() {
    return $this->num1 + $this->num2;
  }

  public function sub() {
    return $this->num1 - $this->num2;
  }

  public function mult() {
    return $this->num1 * $this->num2;
  }

  public function div() {
    return $this->num1 / $this->num2;
  }

}

$res = new Calculator(10, 2);

echo $res->add() . "<br>";
echo $res->sub() . "<br>";
echo $res->mult() . "<br>";
echo $res->div() . "<br>";
