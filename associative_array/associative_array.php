<?php

/* Adiciona isso abaixo quando não tem associative array.

$animal = ['dog', 'cat'];

$animal [] = 'elephant' 

*/

$person = [
    'Age' => 31,
    'Hair' => 'brown',
    'Career' => 'Web developer' 
];

$person['name'] = 'Jeffrey'; // Adicionando isso para o vetor.

// echo $person['Age']; Vai printar o associative array.

var_dump($person); // printa tudo de um jeito maneiro use a tag <pre> do html se estiver dificil de ler .

//die(var_dump($person)); Pode usa assim tb. 

unset($person['Age']); // Vai remover uma elemento do array.

var_dump($person);

//die(); Para não poder mais fazer codigo abaixo.

require 'associative_arraypt2.php';
