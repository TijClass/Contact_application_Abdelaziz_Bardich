<?php

if(isset($_POST['id'])){
    $id = $_POST['id'];
    require_once "./db.php";
    try {
        $sql = $con->prepare("DELETE FROM contacts WHERE id=:id");
        $sql->bindParam(':id',$id,PDO::PARAM_INT);
        if($sql->execute()){
            echo 1;
        }
    }catch(PDOException $e) {
        echo "<br>" . $e->getMessage();
    }
}