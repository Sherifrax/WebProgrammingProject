<?php
    require "config.php";
    require "databasefunctions.php";

    $username = $_POST['username'];
    $usermail = $_POST['usermail'];
    $userpass = $_POST['userpass'];

    if(userSign($username,$usermail,$userpass)){
        $_SESSION['success'] = true;
        header("Location: logsign.php");
    }
    else {
        $_SESSION['success'] = false;
        header("Location: logsign.php");
    }
?>