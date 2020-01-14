<?php
 
 $var = 'PHP Tutorial';

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
    <h3><?= 'PHP Tutorial' ?></h3>

    <p>PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. It is a cross-platform, HTML embedded server-side scripting language and is especially suited for web development.
Go to the PHP Tutorial.</p>

   <p><a href=https://www.w3resource.com/php/php-home.php><?php 'Go to the '. $var ?></a></p>
</body>
</html>
