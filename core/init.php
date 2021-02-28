<?php
// start session
session_start();

// incude configs
require_once "./config/config.php";

// inclide functions
require_once "./helpers/functions.php";

// set loggin state
if(!checkLoginState()){
    header("location: login.php");
}
