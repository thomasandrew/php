<?php

try {
    $pdo = new PDO("mysql:dbname=test;host=localhost", "root", "");
} catch (PDOException $e) {
    die($e->getMessage());
}

/*$res = $pdo->prepare("SELECT * FROM login");
$res->execute();
$resultado = $res->fetchAll();
print_r($resultado);
*/

/*$res = $pdo->prepare("SELECT * FROM login WHERE id= :id");
$res->bindValue(":id", 4);
$res->execute();
$resultado = $res->fetch();
echo "<pre>"; // I don't need to use <pre>.
print_r($resultado);
echo "</pre>";
*/

// Using PDO::FETCH_ASSOC:

$res = $pdo->prepare("SELECT * FROM login WHERE id= :id");
$res->bindValue(":id", 4);
$res->execute();
$resultado = $res->fetch(PDO::FETCH_ASSOC);
echo "<pre>"; // I don't need to use <pre>.
print_r($resultado);
echo "</pre>";

// Use select with foreach() and not with print_r and var_dump beacuse they are only for test:

$res = $pdo->prepare("SELECT * FROM login WHERE id= :id");
$res->bindValue(":id", 4);
$res->execute();
$resultado = $res->fetch(PDO::FETCH_ASSOC);

foreach($resultado as $key => $value) {
    echo $key . ": " . $value . "<br>";
}

