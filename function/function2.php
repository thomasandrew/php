<?php

function higher($num) {
    $higher=0;
    $lower=99999;

    foreach (range(0,5) as $num) {
        if ($num > $higher) {
              $higher = $num;
        } 
        
        if ($num < $lower) {
              $lower = $num;   
        }
    }

    echo "O maior numero é: {$higher}<br><br>";
    echo "O menor numero é: {$lower}<br><br>";
}