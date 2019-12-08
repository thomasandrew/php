<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
 
/* if ($task['completed'] == true) {
     echo 'completed'; 
 } elseif ($task['completed'] == false) {
     echo 'incompleted';
 }
*/

?>

<?php if ($task['completed'] == true) : ?>

    <span class="bla"> <?= 'completed'; ?> </span>

<?php elseif (!$task['completed']) : ?> <!-- Para fazer o elseif -->

    <span class="bla"> <?= 'incompleted'; ?> </span>

<?php endif; ?> 


</body>
</html>