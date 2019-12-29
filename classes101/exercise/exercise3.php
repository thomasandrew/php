<?php

class Factorial_num {

    protected $num;
    
    public function __construct($number) {
      
      if (!is_int($number)) {
          echo "ops"; 
      }

      $this->num = $number;

    } 

    public function result() {

       $factorial = 1;

       for ($i = 1; $i <= $this->num; $i++) {
           $factorial *= $i;
       }

      return $factorial;  
    }

}

$res = new Factorial_num(5);

echo $res->result();
