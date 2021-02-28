<?php
// start session
session_start();

// incude configs
require_once "../config/config.php";

// inclide functions
require_once "../helpers/functions.php";

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