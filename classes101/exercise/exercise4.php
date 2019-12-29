<?php

/* $fruits = array("lemon", "orange", "banana", "apple");

   sort($fruits); // Para alinhar em ordem alfabética.

   foreach ($fruits as $key => $val) {
     echo "fruits[". $key ."] = " . $val . "<br>";
   }
*/

class Ordered {

  protected $_asort;

  public function __construct(array $asort) {

    $this->_asort = $asort;

  }
   
  public function AtoZ() {
 
    $get = $this->_asort;
    sort($get);

    return $get;
  }

}

$res = new Ordered(array(11, -2, 4, 35, 0, 8, -9));
print_r($res->AtoZ()) . "\n";
