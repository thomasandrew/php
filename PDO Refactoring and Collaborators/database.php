<?php

class Connection {

   public static function make() {
    try {
        return new PDO('mysql:host=127.0.0.1;dbname=todos','root','');
    } catch (PDOException $e) {
        //die('Could not connect');
        die($e->getMessage()); // Outra forma de dizer o erro.
    }
   }
}

// $pdo = connection::make();