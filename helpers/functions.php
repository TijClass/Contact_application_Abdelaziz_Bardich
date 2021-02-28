<?php
$con = "";
// connect to DB
function connectToDB($DB_HOST,$DB_NAME,$DB_USER,$DB_PASSWORD){
    try {
        $GLOBALS['con'] = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASSWORD);
        // set the PDO error mode to exception
        return true;
    } catch(PDOException $e) {
        // echo "Connection failed: " . $e->getMessage();
        return false;
    }
}
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
        $userKey = password_hash("1234");
        $exp = new DateTime("1 week");
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
    session_start();
    // remove all session variables
    session_unset();
    // destroy the session
    session_destroy();
    unset($_SESSION['loggedin']);
    unset($_COOKIE['loggedin']);
    return true;
}

// Add contact
function addContact($fName,$lName,$email,$adress,$phone,$group,$note){
    require_once "../config/config.php";
    $sql = "INSERT INTO "
    return true;
}

function connect()