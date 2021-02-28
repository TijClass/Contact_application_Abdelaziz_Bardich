<?php
// require configs
require_once "./config/config.php";
// require functions
require_once "./helpers/functions.php";

if(unsetSessionsCookies()){
    header("location: login.php");
}else{
    header("location: index.php");
}