<?php

$color = array('A'=> 'BLUE', 'B'=>'GREEN', 'C'=>'RED');

foreach ($color as $colors => $cor) {
    echo $colors . ' => '. strtolower($cor) . '<br>';
}

print '<br>';

foreach ($color as $colors => $cor) {
    print_r($colors . ' => ' . strtoupper($cor) . '<br>');
}
