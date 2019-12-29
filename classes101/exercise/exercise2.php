<?php

class Massege {
    public $message = 'Hello All, I am';

    public function name($name) {
       
       return $this->message.$name; // Usar ponto para concatenar.

    }

}

$mymessage = New Massege; 
// Or $mymessage = New Massege();

echo $mymessage->name('Thomas') . "<br>";

?>

<!-- just to practise -->

<?php

class Food {
    
    public $beans;

    public function __construct($meal) {
        return $this->beans = $meal;
    }
}

$eat = new Food('bean');

var_dump($eat);
