<?php 

session_start();

require "config.php";
require "databasefunctions.php";

$username = $_POST['lusername'];
$userpass = $_POST['luserpass'];

if(userLogin($username,$userpass)){
    header("Location: Home.php");
    exit();
}
if(empLogin($username,$userpass)){
    if($_SESSION['Manager']){
        header("Location: ");
        exit();
    }elseif($_SESSION['Admin']){
        header("Location: ");
        exit();
    }

}

header("Location: logsign.php");


?>