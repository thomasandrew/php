<?php
 
$color = array('white', 'green', 'red');

foreach($color as $colors) {
    echo $colors.',';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  
  <?php sort($color); ?>

    <ul>
    
    <?php foreach($color as $colors) : ?>

    <li><?= $colors; ?></li>
    
    <?php endforeach; ?> 

    </ul>
</body>
</html>
