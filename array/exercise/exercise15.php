<?php

$rand = range(11, 20);

shuffle($rand); // Para dar um aleatorio de posição.

for ($i=0;$i<10;$i++) {
    echo $rand[$i] . ' ';
} 
