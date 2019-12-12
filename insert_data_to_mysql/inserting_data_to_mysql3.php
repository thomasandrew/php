<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
    <label>Name</label>
       <input type="text" name="name"/>
    <label>City</label>    
       <input type="text" name="city"/> 
    <label>Address</label>
       <input type="text" name="address"/>
    <input type="submit" name="submit"/>       
</form>
    
</body>
</html>

<?php

$conn = mysqli_connect("localhost","root","","mydb");

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $city = $_POST["city"];
    $address = $_POST["address"];

    $sql = "INSERT INTO data (Name,City,Address) VALUES ('$name', '$city', '$address')";

    if (mysqli_query($conn,$sql)) {
        echo "Record added Sucessfully";
    } else {
        echo "Erro";
    }

}

?>