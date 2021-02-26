<?php
// require configs
require_once "./config/config.php";
// require functions
require_once "./helpers/functions.php";

// Start settion
session_start();
// check loggin infos and set sessions
if(isset($_POST['submit'])){
    $login = checkLoginInfos($_POST);
    if($login){
        $remember = $_POST['remember'] ? true : false;
        setLoginRecord($remember);
        header("location:".ABS_PATH."index.php");
    }else{
        header("location:".ABS_PATH."login.php");
    }
}