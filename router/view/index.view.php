<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<nav>
<ul>
<li><a href="about.php">About page</a></li>
<li><a href="contact.php">Contact page</a></li>
</ul>
</nav>
    <ul>   

        <?php require "../task.php" ?>    

        <?php foreach($tasks as $task) : ?>
             <li>
                <?php if ($task->completed) : ?>
                       
                    <strike><?= $task->description; ?></strike>

                <?php else: ?>
                            
                    <?= $task->description; ?>

                <?php endif; ?>    
             </li>
         <?php endforeach; ?>         
    </ul>


</body>
</html>