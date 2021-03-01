<?php
require_once "./db.php";
if(isset($_POST)){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $adress = $_POST['adress'];
    $group = $_POST['group'];
    $note = $_POST['note'];
    
    if(empty($fname) || empty($lname) || empty($email) || empty($phone) && empty($adress) || empty($group) || empty($note)){
        echo 0;
    }else{
        try {
            $sql = $con->prepare("INSERT INTO contacts (`first_name`,`last_name`,`email`,`phone`,`address1`,`group`,`notes`)
            VALUES (:fname,:lname,:email,:phone,:adress,:group,:notes)");
            $sql->bindParam(':fname',$fname,PDO::PARAM_STR);
            $sql->bindParam(':lname',$lname,PDO::PARAM_STR);
            $sql->bindParam(':email',$email,PDO::PARAM_STR);
            $sql->bindParam(':phone',$phone,PDO::PARAM_STR);
            $sql->bindParam(':adress',$adress,PDO::PARAM_STR);
            $sql->bindParam(':group',$group,PDO::PARAM_STR);
            $sql->bindParam(':notes',$note,PDO::PARAM_STR);
            if($sql->execute()){
            $_POST['id']= $con->lastInsertId();
                echo json_encode($_POST);
            }
        }catch(PDOException $e) {
            echo "<br>" . $e->getMessage();
        }
    }


}else{
    echo 0;
}