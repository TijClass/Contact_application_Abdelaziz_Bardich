<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    require_once "./db.php";
    try {
        $sql = $con->prepare("SELECT * FROM contacts WHERE id=:id");
        $sql->bindParam(':id',$id,PDO::PARAM_INT);
        if($sql->execute()){
            $data = $sql->fetchAll();
            echo json_encode($data);
        }
    }catch(PDOException $e) {
        echo "<br>" . $e->getMessage();
    }
}