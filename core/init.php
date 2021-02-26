<?php
// require configs
require_once "./config/config.php";
// require functions
require_once "./helpers/functions.php";
// Start session
session_start();

if(!checkLoginState()){
    header("location:".ABS_PATH."login.php");
}