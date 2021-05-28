<?php
session_start();

if ($_SESSION["username"] == 'dime' && $_SESSION["password"] == 'test1234' ){

    echo "dobredojde".$_SESSION["username"];


?>
<p> Ova e tvojata avtorizirana stranica koja mozes da ja vidis samo ti </p>
<a href="logout.php">log out</a>
<?php
}else{
    echo "vnesovte gresna lozinka ili password"; 

}



?>