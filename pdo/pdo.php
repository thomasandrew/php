<?php

require 'Task.php';

$pdo = connectToDb();

$tasks = fetchAllTasks($pdo);

/*try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=todos','root','');
} catch (PDOException $e) {
    //die('Could not connect');
    die($e->getMessage()); // Outra forma de dizer o erro.
}*/

//$statement = $pdo->prepare('select * from table1');

//$statement->execute();

//var_dump($statement->fetchAll());
//var_dump($statement->fetchAll(PDO::FETCH_OBJ));

//$tasks = $statement->fetchAll(PDO::FETCH_OBJ);

//$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

//var_dump($tasks[0]->foobar());

//var_dump($results[0]->description);

require 'pdo2.php';
