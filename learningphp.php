<?php
 echo "Hello world!" . " What a beautufull evening! ";

 $a = 5;
 $b = 6;
 
 echo "<br><br>" . $a . "<br><br>";
 echo $a + $b;

 if ($a < $b) {
    echo "<br><br>A is higher than B";   
 } else {
     echo "<br><br>B is higher than A";
 }

 echo "<br><br>";

 for ($i=0;$i<10;$i++) {
     echo $i;
 }

 echo "<br><br>";

 $i = 0;
 
 while ($i < 10) {
    echo $i;
    $i++; 
 }

 echo "<br><br>";

 foreach (range(0,10) as $value) {// Já começa do zero. 
    echo $value;
 }

 echo "<br><br>";

 $array = ["milk", "eggs", "bread", 1234];

 echo $array[1];
 
 echo "<br><br>";

 $assoc = ["milk" => 3, "eggs" => 6];
 echo $assoc["milk"];// tem que escrever o array no conjeite.

 echo "<br><br>";

 foreach ($assoc as $item) {
     echo $item;
 }

?>