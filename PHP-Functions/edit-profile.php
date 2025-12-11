<?php
include_once './db-connect.php';
include_once './functions.php';
session_start();


if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $username = $_POST["username"];

    if (!isNotEmptyLogIn($email, $username)) {
        header("location: ../profile.php?error=emptyFields");
        exit();
    }


    if(userNameExists($conn,$username)!==false || emailExists($conn,$username)!==false){
        header("location: ../profile.php?error=userOrEmailTaken");
        exit();
    }
    else{
         updateUserInfo($conn, $email, $username);
         exit();
    }
}


if (isset($_POST["submit2"])) {
    $password = $_POST["password"];

    if (empty($password)) {
        header("location: ../profile.php?error=emptyFields");
        exit();
    }

    updateUserPassword($conn, $password);
    exit();
}

header("location: ../profile.php");
exit();
