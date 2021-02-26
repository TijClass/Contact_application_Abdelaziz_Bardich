<?php
// require configs
require_once "../config/config.php";
// require functions
require_once "../helpers/functions.php";

if(isset($_POST)){
    $fName = $_POST['fname'];
    $lName = $_POST['lname'];
    $email = $_POST['email'];
    $adress = $_POST['adress'];
    $phone = $_POST['phone'];
    $group = $_POST['group'];
    $note = $_POST['note'];

    if(addContact($fName,$lName,$email,$adress,$phone,$group,$note)){
        echo 1;
    }else{
        echo 0;
    }
}