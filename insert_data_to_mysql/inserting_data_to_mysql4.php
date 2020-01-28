<form action="" method="post">
<input type="text" name="user" id="">
<input type="text" name="pass" id="">
<input type="submit" value="Send">
</form>

<?php

try {

    $pdo = new PDO("mysql:dbname=test;host=localhost", "root", "");

} catch (PDOException $e) {
    
    die($e->getMessage());

}



// 1 forma:
/*    
$res = $pdo->prepare("INSERT INTO login(username, password) VALUES (:u, :p)"); // No VALUES coloca os parametros.

$res->bindValue(":u","Thomas"); // Aceita variaveis e funções.
$res->bindValue(":p","password");
$res->execute();
*/

// bindparam() faz a mesma coisa que dde cima.
/*$nome = "Thomas";
$res->bindparam(":n",$nome); // Aceita somente variaveis.
*/   

// 2 forma

//$pdo->query("INSERT INTO login(username, password) VALUES ('Thomas', 'password')");

// Praticando:

if (isset($_POST["user"])) {
    $use = $_POST["user"];
    $pass = $_POST["pass"];

    $res = $pdo->prepare("INSERT INTO login(username, password) VALUES (:u, :p)");
    $res->bindValue(":u",$use);
    $res->bindValue(":p",$pass);
    $res->execute();
}