<?php

echo "<center><font size=12> seja bem vindos!!!</center></font>";
print"<center>O center também funciona.</center>";
$nome="Thomas Andrew";
$n1=10;
$n2=20;
echo "<font size=5>N1 = {$n1}<br>N2 = {$n2}<br>Nome: {$nome}</font>";

// Operações Matemáticas
// Soma
$soma = $n1 + $n2;
echo "<br><br>A soma de {$n1} + {$n2} é igual a {$soma}";

// Subtração
$sub = $n1 - $n2;
echo "<br>A subtração de {$n1} - {$n2} é igual a {$sub}";

// Multiplicação
$mult = $n1 * $n2;
echo "<br>A multiplicação de {$n1} * {$n2} é igual a {$mult}";

// Divisão 
$div = $n1 / $n2;
echo "<br>A divisão de {$n1} / {$n2} é igual a {$div}";

// Resto da divisão
$res_div = $n1 % $n2;
echo "<br>O resto da divisão de {$n1} % {$n2} é igual a {$res_div}";

// outra maneira de fazer operações, usando a concatenação.
echo "<br><br>";
echo '<font size=5>A soma de $n1 + $n2 = ' . ($n1 + $n2); // Usar parenrasespara somar.
echo '<font size=5><br>A subtração de $n1 - $n2 = ' . ($n1 - $n2); 
echo '<font size=5><br>A multiplicação de $n1 * $n2 = ' .($n1 * $n2);
echo '<font size=5><br>A divisão de $n1 / $n2 = ' . ($n1 / $n2);
echo '<font size=5><br>O resto da divisão de $n1 % $n2 = '. ($n1 % $n2);

?>

<form method="get">
<input type="text" name="x" id="">
<input type="text" name="y" id="">
<input type="text" name="z">
<input type="submit" value="send">
</form>

<?php
// Entrada de valores do usuário - Método GET
$varA = $_GET["x"];
$varB = $_GET["y"];
$varC = $_GET["z"];
echo "<br><br>Valor de a é: {$varA}";
echo "<br>Valor de b é: {$varB}";
echo "<br>Valor de c é: {$varC}";

// Soma
echo "<br><br>";
echo "<br>A soma das variavei {$varA} + {$varB} + {$varC} é igual a" . ($varA + $varB + $varC);

// Subtração 
echo "<br>A subtração das variaveis $varA - $varB - $varC é igual a " . ($varA - $varB - $varC);

// Multiplicação
echo "<br>A multiplicação das variaveis $varA * $varB * $varC é igual a " . ($varA * $varB * $varC);

// Divisão
echo "<br>A divisão das variaveis $varA / $varB / $varC é igual a " . ($varA / $varB / $varC);

// Resto da divisão
echo "O resto da divisão das variaveis $varA % $varB % $varC é igual a " . ($varA % $varB % $varC);

?>

