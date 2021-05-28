<?php
// ja startuvame sesijata 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cas12 Antonio Karapec</title>
</head>
<body>
    <h1>cas 12</h1>

    <?php 
    $_SESSION["najavenkorisnik"] = "Antonio Karapec";
    $_SESSION["omilenbroj"] = "69";

    echo "nasite session promenlivi se setirani  ";
    echo "najaven korisnik e ". $_SESSION["najavenkorisnik"]."i omileniot broj na ".$_SESSION["najavenkorisnik"]."e".$_SESSION["omilenbroj"];
    ?>
      
</body>
</html>

<?php 
/* 
PHP SESSIONS 

kako se startuva sesija?

so pomos na session start()  funkcijata

Session promenlivite se setirani vo globalnata PHP promenliva $_SESSION

session start() funkcijata mora da bide povikana na samiot pocetok na dokumentot.


*/

?>