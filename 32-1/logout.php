<?php 
session_start();

unset($_SESSION["username"]);
unset($_SESSION["password"]);

session_destroy();

echo "vie ste odjaveni!";
header('Refresh: 2; URL=najava.php');


?>