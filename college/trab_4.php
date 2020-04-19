<form action="" method="post">
    <input type="text" name="num1" id="">
    <input type="text" name="not1" id="">
    <input type="text" name="not2" id="">
    <input type="text" name="not3" id="">
    <input type="text" name="saude" id="">
    <input type="text" name="dano" id="">
    <input type="text" name="a" id="">
    <input type="text" name="b" id="">
    <input type="text" name="c" id="">
    <input type="text" name="d" id="">

    <input type="submit" value="Press">
</form>

<?php
// 1. Criar um vetor com 20 elementos inteiros. Imprimir o menor e o maior valor, sem ordenar, o pocentual de números pares e a media dos elementos do vetor. 
$ale = $_POST["num1"];
$vet = array();

for($i=0; $i<$ale; $i++) {
    $vet[$i] = rand(1, 100);
}

var_export($vet);

$higher = 0;
$lowest = 0;
$count = 0;
$avarege = 0;
$total = 0;

foreach($vet as $v) {
    if ($v > $higher) {
        $higher = $v;
    }

    if ($v < $lowest) {
        $lowest = $v;
    }
    
    if($v % 2 == 0) {
        $count++;
    }

    $total += $v;
    $avarage = $total / $ale;  
}

echo '<br><br>O maior vetor: ' . $higher . '<br>O menor vetor: ' . $lowest; 
echo '<br>O porcentual dos numeros pares: ' . ($count/$ale) * 100;
echo '<br>Á media dos elementos do vetor é: ' . $avarage;

print "<hr>";

// 2. Escreva um programa que receba do usuário as 3 notas para dado aluno, armazenando-as em um vetor. Em seguida, o programa deve imprimir na tela tais notas.

$aluno1 = $_POST["not1"];
$aluno2 = $_POST["not2"];
$aluno3 = $_POST["not3"];

$vetStudent = [$aluno1, $aluno2, $aluno3];

foreach($vetStudent as $students) {
    echo "<br><br><br>{$students}";
}

// 3. Para um jogo, precisamos saber se um personagem morreu ou não depois de sofrer um ataque. Faça uma função que receba 2 parârametros,
//Dano e SAÚDE. A função deve retornar verdadeiro se o dano for matar o personagem (ou seja, deixar sua saúde menor ou igual a zero) e falso
//caso contrário.

$saude = $_POST["saude"];
$dano = $_POST["dano"];

function jogo($Dano, $Saude) {
    if ($Dano >= $Saude) {
        return true;
    } else {
        return false;
    }
}

$getFunc = jogo($saude, $dano);
print '<br><br><br>' . $getFunc;

// 4. Efetue um programa em PHP que receba os valor A,B,C e D. Efetue a soma entre A e C e a multiplicação entre B e D, verifique se o
// resultado da soma é maior, menor ou igual ao da multiplicação.

$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["c"];
$d = $_POST["d"];

$soma = $a + $c;
$mult = $b * $d;

if ($soma > $mult) {
    echo "<br><br><br>É maior";
} elseif ($soma < $mult) {
    echo "<br><br><br>É menor";
} else {
    echo "<br><br><br>É igual";
}