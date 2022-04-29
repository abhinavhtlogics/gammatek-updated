<?php session_start();

if(! $_SESSION["app_user_id"]){
    header('Location: https://gammatek-app.herokuapp.com/login.php');
}


//print_r($_SESSION);
?>