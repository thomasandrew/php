<?php

$numbers = [1,2,3,4,5];

//array_push($numbers, "$"); para adicionar um item para um array.

//print_r($numbers);

foreach ($numbers as $number) {

print 'Original array : ' . $number . "<br>";

}

$inserted = '$';
    
array_splice($numbers, 2, 0, $inserted); // Para adicionar um item para o array e sua posição.

echo "<br> After inserting '$' the array is: <br><br>"; 

foreach ($numbers as $n) {
    print_r($n);
}
