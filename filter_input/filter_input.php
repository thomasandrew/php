<?php

$num1 = filter_input(INPUT_POST, "num1");
$num2 = filter_input(INPUT_POST, "num2");
$operacao = filter_input(INPUT_POST, "operacao");
$res = "";

if ($num1 and $num2) {

   switch ($operacao) {
       case "+":
        $res = ($num1 + $num2);
        echo $res;
       break;

       case "-":
        echo $num1 - $num2;
       break;

       case "X": 
        echo $num1 * $num2;
       break;

       case "/":
        echo $num1 /$num2;
       break;

       default: 
        die("Erro");
       break;
   }


}
