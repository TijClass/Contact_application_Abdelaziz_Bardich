<?php
if(isset($_POST)){
    $email= strtolower($_POST['email']);
    $password= $_POST['password'];
    if(!empty($email) && !empty($password)){
        require_once "./db.php";
        $sql = $con->prepare("SELECT password from users WHERE email=:email");
        $sql->bindParam(':email',$email,PDO::PARAM_STR);
        if($sql->execute()){
            $data = $sql->fetchAll();
        }else {
            header("location: ../../login.php?err=Server error please try again!");
            exit();
        }
        if(count($data) > 0){
            $oldPassword = $data[0]['password'];
            if(password_verify($password,$oldPassword)){
                session_start();
                $_SESSION["loggedin"] = 1;
                // Set remember coockies
                if(isset($_POST['rme'])){
                    $key = password_hash($email,PASSWORD_DEFAULT);
                    setcookie("login_email",$email, time() + (86400 * 30), "/"); // remember fo 3 month
                    setcookie("login_key",$key, time() + (86400 * 30), "/"); // remember fo 3 month
                }
                header("location: ../../index.php");
            }else {
                header("location: ../../login.php?err=Wrong password!");
            }
        }else {
            header("location: ../../login.php?err=Email not match our records!");
        }
    }else{
        header("location: ../../login.php?err=Email or Password is empty!");
    }
}