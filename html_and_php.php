<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style>

header {
    background: #e3e3e3;
    padding: 2em;
    text-align: center;s
}

</style>

<body>
    
<header>

<!-- <h1>Hello, world</h1> -->

<!-- <h1><?php //echo 'Hello world'; ?></h1> Escrevendo php em dentro de uma tag de html -->

<h1>

<!--   <?php
   
     /* $greeting = 'Hello, world';
     
     echo $greeting; //Mesma coisa que de cima.
     
     */ 



     // Para usar $_GET[] no url: 

    // $name = $_GET['name'];
     
     //echo $name; (Iso é muito legal).
     //echo "Hello, {$name}"; 

   ?>

</h1>  -->

<!-- <h1><?php // echo "Hello, " . $_GET['name']; ?></h1> -->
<!-- <h1><?php//= "Hello, " . $_GET['name']; ?></h1>  Usar o "=" para printar no php. -->


<!-- É possivel usar tags de html na url do php -->

<h1><?= "Hello, " . htmlspecialchars($_GET['name']); ?></h1> <!-- htmlspecialchars Pega a url para a segurança do site -->

<!-- Para usar o $_GET[] na url é: /?vetor=oi -->

</header>



</body>
</html>