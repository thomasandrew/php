<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'mydb';

$con = new mysqli($host,$user,$pass,$db);

if ($con) {
    echo 'connected sucessfully to db database';
} else {
    echo 'erro';
}

if (!$con -> query("INSERT INTO mytable2 (username,passwold,email) VALUE ('Thomas',12345,'myemail@h.com')")) {
    echo 'erro'. $con -> error;
}

$con -> close();
