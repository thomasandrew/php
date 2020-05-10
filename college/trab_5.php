<form method="post">
    <input type="text" name="one" id="">
    <input type="text" name="five" id="">
    <input type="text" name="alcool" id="" placeholder="alcool">
    <input type="text" name="gaso" id="" placeholder="gasolina">
    <input type="text" name="s1" id="" placeholder="one">
    <input type="text" name="s2" id="" placeholder="two">
    <input type="text" name="s3" id="" placeholder="three">
    <input type="text" name="s4" id="" placeholder="four">
    <input type="text" name="s5" id="" placeholder="five">
    <input type="text" name="s6" id="" placeholder="six">
    <input type="submit" value="Press">
</form>

<?php

// 1. Faça um programa que peça um número e então mostre a mensagem: O número informado foi [número].
$num = $_POST["one"];
print '<br>O número informado foi número: ' . $num;

print '<hr>';

// 2. Faça um programa que converta metros para centímetros. (Dica: 1 metro = 100 centímetros).
function mc($metros)
{
    $metros *= 100;
    return $metros;
}

$getnow = mc(2);
echo "<br><br>{$getnow} centimetros";

print '<hr>';

// 3. Faça um programa que peça o raio de um círculo, calcule e mostre sua área. Fórmula: Area = pi * raio2.
function circle($circle)
{
    $Area = pi() * ($circle * $circle);
    return $Area;
}

echo '<br><br>' . circle(5);

print '<hr>';

/* 4. Faça um programa que peça a temperatura em graus Farenheit, transforme e mostre a temperatura em graus Celsius.
   Fórmula: Celsius = (5 * (Farenheit - 32) / 9).
*/

function temp($farenheit)
{
    return $celsius = (5 * ($farenheit - 32) / 9);
}

echo "<br><br>Celsius: " . temp(5);

print '<hr>';

// 5. Faça um programa que leia números até o usuário digitar 0. Em seguida, mostre o histórico desses números, sendo
// o mais recente em baixo e o mais antigo em cima.

$numbers = explode(",", $_POST["five"]); // explode() separa e tranforma em uma indice.
echo "<br><br>";
var_export($numbers);
for ($i = 0; $i < count($numbers); $i++) {
    print "<br><br>{$numbers[$i]}<br>";

    if ($numbers[$i] === 0) {
        break;
    }
}

print '<hr>';

// 6. Faça um programa que peça o valor da gasolina e do álcool de um posto e diga qual é o combustível mais vantajoso
// abastecer, sabendo que somente é vantagem abastecer álcool se o preço do mesmo é menor ou igual a 70% do valor da gasolina. (Tirar duvida)

$gaso = $_POST['gaso'];
$alcool = $_POST['alcool'];

$porcentagem = $alcool * (70 / 100);

$ifAndElse = $porcentagem <= $gaso ? "Álcool é mais vantajoso" : "Gasolina é mais vantajoso";

echo "<br><br>" . $ifAndElse;

print '<hr>';

// 7. Este é um exercicio difícil! Você deve sortear 6 números de 1 a 60 e guardar numa array. Depois peça para o usuário dizer 6
// números, um de cada vez e guarde-os em uma outra array. Aí diga quantos números ele acertou. Sim, é a loteria certinha desta vez
// tente acertar os 6 números. Depois faça as contas de quantas chances você tem de acertar todos os 6. Você nunca mais vai jogar na loteria!

// (come back to this exercice).

for ($i = 0; $i < 6; $i++) {
    $arraySort[$i] = rand(1, 60);
}

print_r($arraySort);

echo "<br><br>";

$arrayUser = array();

$arrayUser[0] = $_POST['s1'];
$arrayUser[1] = $_POST['s2'];
$arrayUser[2] = $_POST['s3'];
$arrayUser[3] = $_POST['s4'];
$arrayUser[4] = $_POST['s5'];
$arrayUser[5] = $_POST['s6'];

$count = 0;

for ($i = 0; $i < 6; $i++) {
    for ($j = 0; $j < 6; $j++) {
        if ($arraySort[$i] === $arrayUser[$j]) {
            $count++;
        }
    }
}

if ($count === 6) {
    echo "You Win";
} else {
    echo "You lose";
}
