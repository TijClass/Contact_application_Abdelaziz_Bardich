<?php
if(isset($_POST['id'])){
    require_once "./db.php";
    try {
        $sql = $con->prepare("UPDATE contacts SET 
        `first_name`=:fname,
        `last_name`=:lname,
        `email`=:email,
        `phone`=:phone,
        `address1`=:adress,
        `group`=:group,
        `notes`=:notes WHERE id=:id");
        $sql->bindParam(':id',$_POST['id'],PDO::PARAM_INT);
        $sql->bindParam(':fname',$_POST['fname'],PDO::PARAM_STR);
        $sql->bindParam(':lname',$_POST['lname'],PDO::PARAM_STR);
        $sql->bindParam(':email',$_POST['email'],PDO::PARAM_STR);
        $sql->bindParam(':phone',$_POST['phone'],PDO::PARAM_STR);
        $sql->bindParam(':adress',$_POST['adress'],PDO::PARAM_STR);
        $sql->bindParam(':group',$_POST['group'],PDO::PARAM_STR);
        $sql->bindParam(':notes',$_POST['note'],PDO::PARAM_STR);
        if($sql->execute()){
            echo 1;
        }
    }catch(PDOException $e) {
        echo "<br>" . $e->getMessage();
    }
}