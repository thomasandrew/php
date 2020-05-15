<?php
$dbname = "aula008";
$user = "root";
$pass = "";
$host = "localhost";

$conn = mysqli_connect($host, $user, $pass) or die(mysqli_error($host));
mysqli_select_db($conn,$dbname) or die(mysqli_error($host));

$name = $_POST["name"];
$endereco = $_POST["endereco"];
$email = $_POST["email"];
$data = $_POST["data"];

if ($_POST["submit"] === "Send") {
    $sign_in = mysqli_query($conn, "insert into exercise(nome,endereco,email,data) values('$name','$endereco','$email','$data')");
} else {
    print "Erro";
}
