<?php 

session_start();

$username = $_POST["uname"] ;
$password = $_POST["psw"];

echo "vnesovte username ".$username . "i password".$password;

$_SESSION["username"] = $username;
$_SESSION["password"] = $password;

echo"<br> Session promenlivite se setirani so vrednosti username = " .$_SESSION["username"]." i password ".$_SESSION["password"];



?>

</br>
<a href="avtorizirana_stranica.php">Ova e tvojata avtorizirana stranica</a>