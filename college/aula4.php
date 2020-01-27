<?php

// Estrutura de repetição - comando while (Enquanto).
$var_1 = 0;
while ($var_1<11) {
    echo "{$var_1}<br>";
    $var_1++;
}
echo "<br>";
echo "<hr>";

// Estrutura de repetição - comando do while (Faça enquanto).
$var_2 = 0;
do {
    echo "{$var_2}<br>";
    $var_2++;
} while ($var_2 < 11);
echo "<br>";
echo "<hr>";

//Estrutura de repetição - comando for (Faça enquanto).
$var_3 = 0;
for ($i=0; $i<11; $i++) {
    echo "{$var_3}<br>";
    $var_3++;
}
echo "<br>";
echo "<hr>";

// Array - O array pode ser declarado de 3 maneiras diferentes
// Definição simples

$disciplinas = array("Prog web 2","BD2","BD1","Estrutura de Dados","Sistemas Operacionais");
print_r($disciplinas);
echo "<br>";
echo "<hr>";

echo "$disciplinas[0]<br>";
echo "$disciplinas[1]<br>";
echo "$disciplinas[2]<br>";
echo "$disciplinas[3]<br>";
echo "$disciplinas[4]<br>";
echo "<br>";
echo "<hr>";

// Criando um novo elemento dentro do array:
$jogos = array("League of Legends", "Magic", "RPG", "Kingdom Hearts");

echo "$jogos[0]<br>";
echo "$jogos[1]<br>";
echo "$jogos[2]<br>";
echo "$jogos[3]<br>";
$jogos[] = "Kingdom Hearts";
echo "<br>";
echo "<hr>";

// Criando um array atraves de indices:
$filmes = array();
$filmes[0] = "Harry Potter e a pedra filosofal";
$filmes[1] = "Harry Potter e a câmara secreta";
$filmes[2] = "Harry Potter e o prisioneiro de Azkabam";
$filmes[3] = "Harry Potter e o calice de fogo";
$filmes[4] = "Harry Potter e a ordem da fênix";
$filmes[5] = "Harry Potter e o enigma do príncipe";
$filmes[6] = "Harry Potter e as reliquias da morte";
echo "$filmes[0]<br>";
echo "$filmes[1]<br>";
echo "$filmes[2]<br>";
echo "$filmes[3]<br>";
echo "$filmes[4]<br>";
echo "$filmes[5]<br>";
echo "$filmes[6]<br>";
echo "<br>";
echo "<hr>";

for ($j=0; $j<7; $j++) {
    echo "$filmes[$j]<br>";
}
echo "<br>";
echo "<hr>";

// Array com índice textual:
$carro = array();
$carro["cor"] = "Preta";
$carro["modelo"] = "Fusca";
$carro["ano"] = "1996";
echo "O modelo do carro é " . $carro["modelo"];
echo ", sua cor é " . $carro["cor"];
echo "do ano de " . $carro["ano"];
echo "<br>";
echo "<hr>";

// Maneira mais simples
$series = array("n1" => "American Gods", "n2" => "Lost", "n3" => "PLL");
print_r($series);
echo "<br>";
echo "<hr>";

$carros = array();
$carros["cor"] = array("Preta", "Azul", "Verde Abacate");
$carros["modelo"] = "Fusca";
$carros["ano"] = "1996";
print_r($carros);
echo "<br>A segunda cor do carro é " . $carros["cor"][1];
echo "<br>";
echo "<hr>";

// Criação de vetor dinamico - range:
$a = range(0,20,5);
echo "<br>";
print_r($a);
echo "<br>";
echo "<hr>";

// Unset - Para deletar uma índice:
$b = array(1 => "a", 3 => "b", 5 => "c", 9 => "d");
print_r($b);
unset($b[5]);
print_r($b);
echo "<br>";
echo "<hr>";