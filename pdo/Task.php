<?php

class Task {
    public $description;

    public $completed;

   /* function foobar() {
        return 'foobar';
    } */

}

function connectToDb() {
    try {
        return new PDO('mysql:host=127.0.0.1;dbname=todos','root','');
    } catch (PDOException $e) {
        //die('Could not connect');
        die($e->getMessage()); // Outra forma de dizer o erro.
    }
}

function fetchAllTasks($pdo) {
    $statement = $pdo->prepare('select * from table1');

    $statement->execute();

    return $statement->fetchALL(PDO::FETCH_CLASS, 'Task');
}