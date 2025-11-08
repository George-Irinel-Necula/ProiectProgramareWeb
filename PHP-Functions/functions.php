<?php

function isNotEmpty($email,$username,$password,$password_repeat) {
    if(empty($email)||empty($username)||empty($password)||empty($password_repeat)) {
        return false;
    }
    return true;
}

function passwordMatch($password,$password_repeat){
    if($password==$password_repeat){
        return true;
    }
    else
        return false;
}

function userExists($conn,$username,$email){
    $sql="SELECT * FROM users WHERE username = ? || email = ?";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../register.php?error=stmt_error");
        exit();
    }
    mysqli_stmt_bind_param($stmt,"ss",$username,$email);
    mysqli_stmt_execute($stmt);

    $result=mysqli_stmt_get_result($stmt);
    if($row=mysqli_fetch_assoc($result)){
        return $row;
    }
    else {
        return false;
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn,$username,$email,$password,$password_repeat){
    $sql="INSERT INTO users (username,email,password) VALUES (?,?,?)";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../register.php?error=stmt_error");
        exit();
    }

    $password_hash=password_hash($password,PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt,"sss",$username,$email,$password_hash);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../login.php?");
    exit();
}

?>