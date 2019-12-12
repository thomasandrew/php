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
       Email: <input type="email" name="email"><br><br> 
       Subject: <input type="text" name="subject"><br><br>  
       Body: <input type="text" name="body"><br><br>  
       <input type="submit" name="submit"> 
    </form>
</body>
</html>

<?php
 
if (isset($_POST["submit"])) {

   $email = $_POST["email"];
   $subject = $_POST["subject"];
   $body = $_POST["body"]; 
   
   $result = mail($email,$subject,$body);

   var_dump($result);

}


?>
