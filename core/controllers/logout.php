<?php
session_start();
$_SESSION['loggedin'] = "";
// remove all session variables
session_unset();
// destroy the session
session_destroy();
 // forget coockies
setcookie("login_email","", time() - (86400 * 30), "/");
setcookie("login_key","", time() - (86400 * 30), "/");
// redirect to login.php
header("location: login.php");