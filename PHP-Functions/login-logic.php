<?php

if(isset($_POST["submit"])){
$email=$_POST["email"];
$password=$_POST["password"];


include_once './db-connect.php';
include_once './functions.php';

    if(!isNotEmptyLogIn($email,$password)){
        header("location: ../login.php?error=emptyFields");
        exit();
    }
    
    logInUser($conn,$email,$password);
}

else{
    header("location: ../login.php");
    exit();
}
?>
