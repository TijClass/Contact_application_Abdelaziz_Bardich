<?php 
include_once "./core/header.php";
include_once "./core/controllers/db.php";

try {
    $sql = $con->prepare("SELECT * FROM contacts order by id DESC");
    if($sql->execute()){
        $data = $sql->fetchAll();
    }
}catch(PDOException $e) {
    echo "<br>" . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact list</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="./assets/vendor/bootstrap/bootstrap.css">
    <!-- fontawesom -->
    <link rel="stylesheet" href="./assets/vendor/fontawesome/css/all.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <div class="screen-loader">
        <img src="./assets/img/loader-icon.gif.gif" alt="screen loader">
    </div>
    <header class="pt-4 mb-3">
        <div class="container">
            <div class="row d-flex align-items-center b-header rounded-pill bg-white shadow">
                <div class="col-12 col-md-2 text-center text-md-left">
                    <div class="logo text-center text-md-left">
                        <img src="./assets/img/logos/logo.png" alt="Website logo" class="d-none d-md-block">
                        <img src="./assets/img/logos/logo.png" alt="Website logo" class="d-md-none mx-auto my-3">
                    </div>
                </div>
                <div class="col-12 col-md-10 p-0 text-center d-flex justify-content-between align-items-center flex-column flex-md-row">
                    <div class="text-left d-none d-md-block mb-3 mb-md-0"><h1 class="h3">Welcome title</h1></div>
                    <div class="text-right"><a href="./core/controllers/logout.php" class="btn btn-danger d-block rounded-pill py-md-3 shadow logout-btn"><i class="fa fa-row-left"></i> Logout</a></div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 p-2 p-md-5">
                            <div class="row m-0">
                                <div class="col-12 col-md-6">
                                    <h2 class="text-light">Contact list:</h2>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="row justify-content-end align-items-center">
                                        <div class="col-6 search p-0">
                                            <input class="w-100 border rounded p-2" type="search" name="search" id="search" placeholder="search">
                                            <label for="search"><i class="fa fa-search"></i></label>
                                        </div>
                                        <div class="col-auto">
                                            <button class="btn shadow btn-primary p-2 add-person" data-bs-toggle="modal" data-bs-target="#add-person">Add person</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 table-responsive">
                                <table class="table table-striped shadow border rounded bg-white rounded mt-3">
                                    <thead>
                                        <th scope="col">ID</th>
                                        <th scope="col">Firstname</th>
                                        <th scope="col">Lastname</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Adress</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Group</th>
                                        <th scope="col">Notes</th>
                                        <th scope="col">Actions</th>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    foreach($data as $row){
                                        echo '
                                        <tr data-id="'.$row['id'].'"> 
                                            <td scope="row">'.$row['id'].'</td>
                                            <td>'.$row['first_name'].'</td>
                                            <td>'.$row['last_name'].'</td>
                                            <td>'.$row['email'].'</td>
                                            <td>'.$row['address1'].'</td>
                                            <td>'.$row['phone'].'</td>
                                            <td>'.$row['group'].'</td>
                                            <td>'.$row['notes'].'</td>
                                            <td><a onclick="showEditModal('.$row['id'].')" class="btn btn-link edit-contact">Edit</a> <a onclick="deleteContact('.$row['id'].')"><i class="fa fa-times-circle text-danger"></i></a></td>
                                        </tr>
                                        ';
                                    }?>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include "./add-modal.php"; ?>
    <?php include "./edit-modal.php"; ?>
    <script src="./assets/vendor/bootstrap/bootstrap.min.js"></script>
    <script src="./assets/vendor/jquery/jquery.min.js"></script>
    <script src="./assets/vendor/sweetalert/sweetalert.min.js"></script>
    <script src="./assets/js/function.js"></script>
    <script src="./assets/js/script.js"></script>
</body>
</html>