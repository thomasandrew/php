<?php

try {
    $pdo = new PDO("mysql:dbname=test;host=localhost", "root", "");    
} catch(PDOException $e) {
    die($e->getMessage());
}

// Update using prepare().

/* $res = $pdo->prepare("UPDATE login SET username= :u WHERE id= :id");
   $res->bindValue(':u', "Thomas");
   $res->bindValue(":id",4);
   $res->execute();
*/

// Update using query().
$res = $pdo->query("UPDATE login SET username='Paulo' WHERE id='4'");
