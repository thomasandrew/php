<?php

try {
  $pdo = new PDO("mysql:dbname=test;host=localhost", "root", "");
} catch(PDOException $e) {
    die($e->getMessage());
}

// Delete using prepare().

/* $res = $pdo->prepare("DELETE FROM login WHERE id= :id");
   $id = 2;
   $res->bindValue(":id",$id);
   $res->execute();
*/
   
// Delete using query().

$res = $pdo->query("DELETE FROM login WHERE id= '3' ");
