<?php
session_start();
if(isset($_COOKIE['login_email'])){
    if($_COOKIE['login_email'] == "abby@email.com"){
        if($_COOKIE['login_key'] == password_hash("1234",PASSWORD_DEFAULT)){
            $_SESSION['loggedin'] = 1;
        }
    }
}else{
    if(!isset($_SESSION['loggedin'])){
        header("location: login.php");
    }
}