<?php
session_start();
unset($_SESSION['id_usuario']); // unset é o opsto de isset.
header("location: login.php");

