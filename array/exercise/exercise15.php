<?php

$rand = range(11, 20); // Eu acho que range deve ter alguma coisa a ver com array.

shuffle($rand); // Para dar um aleatorio de posição para um array.

for ($i=0;$i<10;$i++) {
    echo $rand[$i] . ' ';
} 
