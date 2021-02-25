<?php

// set login
function setLoginRecord(bool $remember){
    if($remember){
        // set cookies
    }else{
        // set session
        $_SESSION['loggedin'] = true;
    }
}
// Check login state
function checkLoginState(){
    if(isset($_SESSION['loggedin'])){
        // user logged in
    }else{
        header("location: login.php");
    }
}