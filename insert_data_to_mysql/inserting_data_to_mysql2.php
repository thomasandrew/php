<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'mydb';

$con = mysqli_connect($host,$user,$pass,$db);

if ($con) {
    echo 'sucessfull';
} else {
    echo 'erro';
}

$sql = "INSERT INTO mytable3 (username,password,email) VALUE ('Thomas',12345,'myemail@h.com')";

$query = mysqli_query($con,$sql);

if ($query) {
    echo '<br>sucessfull<br>';
} else {
    echo '<br>erro<br>';
}