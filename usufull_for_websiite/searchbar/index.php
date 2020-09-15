<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Search</label>
        <input type="text" name="search">
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php

$con = new PDO("mysql:host=localhost;dbname=searchbar",'root','');

if (isset($_POST["submit"])) {
    $str = $_POST["search"];
    $sth = $con->prepare("SELECT * FROM `search` WHERE Name = '$str'");

    $sth->setFetchMode(PDO:: FETCH_OBJ);
    $sth->execute();

    if ($row = $sth->fetch()) {
        ?>
        <br><br><br>
        <table>
            <tr>
                <th>Name</th>
                <th>Description</th>
            </tr>
            <tr>
                <td><?php echo $row->Name; ?></td>
                <td><?php echo $row->Description; ?></td>
            </tr>
        </table>
        <?php
    } else {
        echo "Name does not exist";
    }
}

?>