<form action="" method="get">
    <input type="text" name="one" id="">
    <br>
    <input type="text" name="two" id="" placeholder="valor do jantar">
    <br>
    <input type="submit" value="Press">
</form>

<?php
// 1)Elabora um programa que leia um numero. Calcule e informa o desse numero. 

$num1 = $_GET["one"];
echo "O dobro do numero é: " . (2 * $num1);

// 2)Elaborar um programa que leia um valor de um jantar. Calcule e informe o valor da taxa do garçon(%10) e o valor total a ser pago.
$price = $_GET["two"];
$gorgeta = $price * 0.1;
$total = $price + $gorgeta;
print '<br>O valor total é: ' . $total . ' e gorgeta ' . $gorgeta;
