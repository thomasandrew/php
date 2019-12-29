<?php

// Option 1: 

//$date = new DateTime("2000-10-01"); // Usar data
//echo $date->format('y-m-d'); // Para formatar a data.

// Option 2:

/*try {

  $date = new DateTime('2010-01-01');

} catch (Exception $e) {
    echo $e->getMessage(); 
    exit(1); // Para die.
}

echo $date->format('y-m-d');*/

// Para saber a quantidade de dia:

/*$datetime1 = new DateTime('2009-10-11');
$datetime2 = new DateTime('2009-10-13');
$interval = $datetime1->diff($datetime2);
echo $interval->format('%R%a days'); A quantidade de dias.
?> */

// Exercise: 

$sdate = new DateTime('1981-11-03');
$edate = new DateTime('2013-09-04');

$interval = $sdate->diff($edate); // Eu acho que é a diferença (acho).
$interval->format('y-m-d');

echo "Diference: " . $interval->y . " Years, " . $interval->m . " Months, " . $interval->d . " Days";         


