<?php

if(isset($_POST["submit"])){
$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];
$password_repeat=$_POST["password_repeat"];

include_once './db-connect.php';
include_once './functions.php';

    if(!isNotEmpty($email,$username,$password,$password_repeat)){
        header("location: ../register.php?error=emptyFields");
        exit();
    }
    

    if(!passwordMatch($password,$password_repeat)){
    header("location: ../register.php?error=passwordNotMatch");
    exit();
    }
   

    if(emailExists($conn,$email)!==false){
    header("location: ../register.php?error=emailExists");
    exit();
    }

    if(userNameExists($conn,$username)!==false){
    header("location: ../register.php?error=userNameExists");
    exit();
    }
    
    createUser($conn,$username,$email,$password,$password_repeat);
}

else{
    header("location: ../register.php");
    exit();
}
?>
