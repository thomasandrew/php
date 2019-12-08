<?php

require 'function2.php';

$animals = ['cat','dog'];

function dumper($one, $two, $three) {
    var_dump($one, $two, $three);
}

dumper('hello', 'big', 'world');

space(); // Uma função que eu criei para dar espaço.

function dd($data) {
  echo '<pre>';

  var_dump($data);

  echo '</pre>';
}

//dd($animals); Pode se isso.

higher(0); // Essa função esta em outro arquivo php.

// dd(['dog', 'cat']); Pode fazer isso.

dd('Hello world!');


/*

$array = ['cheese','cake'];

echo '<pre>';

var_dump($array);

echo '</pre>';

// Use o pre para deixar o array facil de ler se precisar.

*/

function space() {
    echo "<br><br>";
}
