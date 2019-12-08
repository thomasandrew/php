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
           <strong>Status: </strong> 

           <?php if ($task['completed']) : ?> <!-- Geralmente se faz isso para não ficar bagunçado quando faz do jeito normal -->
           
               <span class="bla"> <?= '&#9745;' ?> </span>
             
           <?php else : ?> <!-- Para usar o else. -->  
               <span class="bla"> <?= 'incompleted' ?> </span>

           <?php endif; ?> <!-- Para fechar o if (pode usar sem o else para fechar o if). -->




           <?php
             /*
               if ($task['completed']) {
                   echo '&#9745;'; // Icone do html.
               } else {
                   echo 'Incomplete';
               }
             */ 
           ?>


       </li>
   </ul>

</body>
</html>