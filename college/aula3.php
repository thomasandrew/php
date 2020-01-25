<?php
// Condição if, else, elseif (simples)
$data = $_POST["nascimento"];
$idade = date("Y") - $data;
echo "Voce nasceu em {$data} e atualmente tem {$idade}";
if ($idade >= 18) {
    $votar = "Já pode votar";
    $preso = "Já pode ser preso";
} else {
    $votar = "Não pode votar";
    $preso = "Não pode ser preso";
}
echo "<br>Com essa idade {$votar} e também {$preso}";

$peso = $_POST["peso"];
$altura = $_POST["altura"];
echo "<br>O peso digitado é {$peso} kg e a altura é {$altura} m.";
$imc = $peso / ($altura * $altura);
echo "<br>O seu imc  é " . round($imc);

if ($imc < 18.5) {
    echo "<br>Você está abaixo do peso";
}

if ($imc >= 18.6 and $imc < 24.9) {
    echo "<br>Você está com o peso ideal";
}

if ($imc >= 25 and $imc <= 29.9) {
    echo "<br>Você está acima"; 
}

if ($imc >= 30 and $imc <= 34.9) {
    echo "<br>Você está obeso";
}

if ($imc > 35) {
    echo "<br>Você é gordo morbido, está próximo a morte, se cuide.";
}

// Switch condição multipla

$semana = $_POST["semana"];
switch($semana) {
    case 1: "<br>Domingo - Deus acordou";
    case 2: "<br>Segunda - Deus criando o projeto universo";
    case 3: "<br>Terça - Deus começando o projeto universo";
    case 4: "<br>Quarta - Deus consertando erros no projeto universo";
    case 5: "<br>Quinta - Deus continuando o projeto universo após corrigir os erros";
    case 6: "<br>Sexta - Deus termina o projeto universo";
    case 7: "<br>Sábado -Deus descança";
    echo "<br>Ferrou tudo";
break;
    case 8: "<br>Sabado";
    case 9: "<br>Domingo";
    echo "<br>Go have some fun";
break;

    default: "<br>Escolheu errado";

}