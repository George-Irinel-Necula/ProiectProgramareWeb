<?php

function isNotEmpty($email,$username,$password,$password_repeat) {
    if(empty($email)||empty($username)||empty($password)||empty($password_repeat)) {
        return false;
    }
    return true;
}

function isNotEmptyLogIn($email,$password) {
    if(empty($email)||empty($password)) {
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

function userExists($conn,$email){
    $sql="SELECT * FROM users WHERE email = ?";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../register.php?error=stmt_error");
        exit();
    }
    mysqli_stmt_bind_param($stmt,"s",$email);
    mysqli_stmt_execute($stmt);

    $result=mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
    mysqli_stmt_close($stmt);
    if($row){
        return $row;
    }
    else {
        return false;
    }
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

function logInUser($conn,$email,$password){
    $userExists = userExists($conn,$email);

    if($userExists==false){
        header("location: ../login.php?error=incorrectLogin");
        exit();
    }
    $hashedPassword=$userExists["password"];
    $passwordVerify=password_verify($password,$hashedPassword);

    if($passwordVerify==false){
        header("location: ../login.php?error=incorrectLogin");
        exit();
    }else if($passwordVerify==true){
    session_start();
    $_SESSION["email"]=$userExists["email"];
        header("location: ../index.php?login=success");
        exit();
}
}

?>