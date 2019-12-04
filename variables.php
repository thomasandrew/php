<?php 

$greeting = 'Hello universe!'; // That's a string.

echo $greeting;

$name = 'Thomas Andrew';

echo "<br><br>";

echo "Hello, $name <br>"; // Pode escrever a variavel na string se tiver double quotes.
echo "Hello, {$name} <br>"; // Coloca chave para saber que é uma variavel.
echo 'Hello, ' . $name . "<br>"; // quando esta usando single quote tem que usar "." para separar a string da variavel.
echo "$greeting, $name"; // Para me acostumar LOL.

?>