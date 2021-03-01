<?php
if(isset($_POST)){
    $email= $_POST['email'];
    $password= $_POST['password'];
    if(!empty($email) && !empty($password)){
        session_start();
        $_SESSION["loggedin"] = 1;
        // Set remember coockies
        if(isset($_POST['rme'])){
            $key = password_hash($password,PASSWORD_DEFAULT);
            setcookie("login_email",$email, time() + (86400 * 30), "/"); // remember fo 3 month
            setcookie("login_key",$key, time() + (86400 * 30), "/"); // remember fo 3 month
        }
        header("location: ../../index.php");
    }else{
        header("location: ../../login.php?err=Email or Password is empty!");
    }
}