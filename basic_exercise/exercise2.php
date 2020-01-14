<form action="" method="post">

<input type="text" name="string1">
<br>
<input type="text" name="string2">
<br>
<input type="submit" value="press" name="submit">
</form>

<?php

if(isset($_POST["submit"])) {
    
   $str1 = $_POST['string1'];
   $str2 = $_POST['string2'];

   echo $str1 . '<br>' . $str2;
 
}
