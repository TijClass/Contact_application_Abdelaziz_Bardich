<?php
// check login infos
function checkLoginInfos($POST){
    // if email or password are empty
    if($POST['password'] == "" || $POST['email'] == ""){
        return false;
    }
    // check for email
    if($POST['email'] != "abby@email.com"){
        return false;
    }

    // verify password
    $hashedPassword = password_hash("1234", PASSWORD_DEFAULT);
    if(!password_verify($POST['password'],$hashedPassword)){
        return false;
    }
    return true;
}
// set login
function setLoginRecord(bool $remember){
    if($remember){
        // $userKey = password_hash("1234");
        // $exp = new DateTime("1 week");
        // $_SESSION["favcolor"] = "green";
        $_SESSION['loggedin'] = "true";
        setcookie("loggedin", "true", $exp->getTimestamp(), "/"); // 86400 = 1 day
    }else{
        // set session
        $_SESSION['loggedin'] = "true";
    }
}
// Check login state
function checkLoginState(){
    if(isset($_SESSION['loggedin'])){
        return true;
    }else{
        return false;
    }
}
// unset sessions & Cookies
function unsetSessionsCookies(){
    // remove all session variables
    session_unset();
    // destroy the session
    session_destroy();
    unset($_COOKIE['loggedin']);
}