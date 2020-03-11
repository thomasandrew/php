<form action="" method="post">
  <!-- Exercicio 1 -->
  <input type="text" name="one" id="" placeholder="month">
  <br>
  <!-- Exercicio 2 -->
  <input type="text" name="two" id="" placeholder="anos">
  <br>
  <input type="text" name="three" id="" placeholder="cigarros">
  <br>
  <input type="text" name="four" id="" placeholder="maço">
  <br>
  <!-- Exercicio 3 -->
  <input type="text" name="five" id="" placeholder="Amália">
  <br>
  <input type="text" name="six" id="" placeholder="Joaquim">
  <br>
  <!-- Exercicio 5 -->
  <input type="text" name="seven" id="" placeholder="num1">
  <br>
  <input type="text" name="eight" id="" placeholder="num2">
  <br>
  <input type="text" name="nine" id="" placeholder="num3">
  <br>
  <input type="submit" value="Press">
</form>

<?php

// Elabora um programa em JS que leia uma informação compreendida entre 1 e 12 e imprima o mês correspondente. Caso seja digitada uma informação inválida, imprimir uma mensagem esclarecedora.
$month = $_POST["one"];

switch($month) {
    case 1: 
        echo "January";
    break;

    case 2: 
        echo "Fabruary";
    break;

    case 3: 
        echo "March";
    break;

    case 4: 
        echo "April";
    break;

    case 5: 
        echo "May";
    break;

    case 6: 
        echo "June";
    break;

    case 7: 
        echo "July";
    break;

    case 8:
        echo "August";
    break;

    case 9: 
        echo "Setember";
    break;

    case 10:
        echo "October";
    break;

    case 11: 
        echo "November";
    break;

    case 12:
        echo 'December';
    break;

    default:
        echo '<strong>Error</strong>';
    break;
}

// 2)Calcular a quantidade de dinheiro gasta porum fumante. Dados: O número de anos que elefuma, o número de cigarros fumados por dia e o preço de uma carteira.

$ano = $_POST["two"];
$cigarro = $_POST["three"];
$preco = $_POST["four"];

$ano *= 365;
$cigarro *= $ano;
$preco = $preco * ($cigarro / 20);
$n = number_format($preco);

echo "<br><br>O total é {$n}";

// 3)Sabendo que Amália tem x anos e Joaquim y anos, fazer um program PHP que verifique aidade dos 2 amigos e exiba o nome do mais velho na tela.
$amalia = $_POST["five"];
$joaquim = $_POST["six"];

if ($amalia > $joaquim) {
    echo "<br><br>Amália é mais velha";
} else {
    echo "<br><br>Joaquim é mais velho";
}

// 4)Faça uma página PHP que sorteie um número aleatório entre 1 e 14 e verifique se ele é múltiplo de 3 ou 5.
$random = rand(1, 14);
echo '<br><br> Random number: '. $random . "<br>";
if ($random % 3 == 0) {
    echo "<br>É multiplo de 3";
} elseif ($random % 5 == 0) {
    echo "<br>É multiplo de 5";
} else {
    echo "<br><strong>Error</strong>";
}

// 5)O triângulo é uma figura geométrica composta por três retas.Ele pode ser classificado conforme sua proporcionalidade. Equilátero Isósceles Escaleno Faça um prompt no qual o usuário informará três números que representam cada um dos lados de um triângulo e determine sua classificação de proporcionalidade.
$num1 = $_POST["seven"];
$num2 = $_POST["eight"];
$num3 = $_POST["nine"];
if ($num1 !== $num2 and $num1 !== $num3 and $num2 !== $num3) {
    echo "<br><br>Escaleno";
} elseif ($num1 === $num2 and $num1 === $num3 and $num2 === $num3) {
    echo "<br><br>Equilátero";
} else {
    echo "<br><br>Isósceles";
}























