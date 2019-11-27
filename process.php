<?php 

/*
if(isset($_GET['text'])) {
    echo $_GET['text'];
} else {
    echo "No data was provided";
}
*/

if (isset($_POST['text'])) {
    echo $_POST['text'];
} else {
    echo "No data was privided";
}

?>