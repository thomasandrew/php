<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
  <h1><?= "Calculadora"; ?></h1>

  <form action="practise.php" method="post">

    <label for="">num1: </label>
    <input type="text" name="num1">

    <select name="operacao">
      <option value="+">+</option>
      <option value="-">-</option>
      <option value="*">x</option>
      <option value="/">/</option>
    </select>  
  
    <label for="">num2: </label>
    <input type="text" name="num2">
    
    <input type="submit" name="submit">

  </form>

</body>
</html>

<?php require 'filter_input.php';?>
