<?php
  // Entre com o resultado de três alunos, pelo metodo GET, e depois apresente os resultado com a variavel e sem variavel.  
?>

<form action="" method="get">
    <input type="text" name="first" id="">
    <input type="text" name="second" id="">
    <input type="text" name="third" id="">
    <input type="submit" value="Press">
</form>

<?php
 
 $first = $_GET["first"];
 $second = $_GET["second"];
 $third = $_GET["third"];
 $media = $first + $first + $first / 3;
 $m = number_format($media);
 echo "Á media é {$m}";
 echo '<br>Á media sem variavel é ' . number_format((($first + $second + $third) / 3)); 

?>
