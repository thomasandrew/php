<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
   <h1>Task for the Day</h1>
   
   <?= ucwords('eu sou thomas andrew'); // A primeira letra das frases vão estar com letra maiuscula ?>

   <ul>
     
    <?php foreach($task as $heading => $value) : ?>
     
        <li>
            <strong><?= ucwords($heading); // ucworld() Deixa a primeira letra com letra maiuscula ?> </strong> <?= $value; ?>  
        </li>

    <?php endforeach; ?>

   </ul>
   
   <?= "<br><br>"; ?>

   <ul>
       <li>
           <strong>Name: </strong> <?= $task['title']; ?>
       </li>

       <li>
           <strong>Due date: </strong> <?= $task['due']; ?>
       </li>

       <li>
           <strong>Personal Responsible: </strong> <?= $task['assigned_to']; ?>
       </li>

       <li>
           <strong>Status: </strong> <?= $task['completed'] ? 'Completed' : 'Incomplete'; // Operador ternario para ver se é true or false?> 
       </li>
   </ul>

</body>
</html>