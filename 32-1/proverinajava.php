<?php 

session_start();

$username = $_POST['uname'];
    $password = $_POST['psw'];

    if ($username =='dime' and $password =='test1234')
    {
        include 'INDEX.HTML';
    }
    else
    {
        echo 'you are not the admin';
    }



?>

</br>
