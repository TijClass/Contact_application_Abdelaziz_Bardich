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
    <header class="pt-4 mb-3">
        <div class="container">
            <div class="row d-flex align-items-center b-header rounded-pill bg-white">
                <div class="col-12 col-md-2 text-md-left">
                    <div class="logo"><img src="./assets/img/logos/logo.png" alt="Website logo"></div>
                </div>
                <div class="col-12 col-md-10 p-0 text-center d-flex justify-content-between align-items-center">
                    <div class="text-left"><h1 class="h3">Welcome title</h1></div>
                    <div class="text-right"><a href="./core/controllers/logout.php" class="btn btn-primary rounded-pill py-3 shadow logout-btn"><i class="fa fa-row-left"></i> Logout</a></div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 p-5">
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
                                            <button class="btn shadow btn-primary p-2" data-bs-toggle="modal" data-bs-target="#add-person">Add person</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <table class="table table-striped shadow border rounded bg-white rounded mt-3">
                                    <thead>
                                        <th scope="col">ID</th>
                                        <th scope="col">Firstname</th>
                                        <th scope="col">Lastname</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Adress</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Group</th>
                                        <th scope="col">Actions</th>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    foreach($data as $row){
                                        echo '
                                        <tr>
                                            <td>'.$row['id'].'</td>
                                            <td>'.$row['first_name'].'</td>
                                            <td>'.$row['last_name'].'</td>
                                            <td>'.$row['email'].'</td>
                                            <td>'.$row['address1'].'</td>
                                            <td>'.$row['phone'].'</td>
                                            <td>'.$row['group'].'</td>
                                            <td><a data-id="'.$row['id'].'" href="#">Edit</a> <a href="./core/controllers/delete-contact.php?id='.$row['id'].'"><i class="fa fa-times-circle text-danger"></i></a></td>
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
    <!-- Add contact modal -->
    <div class="modal fade" id="add-person" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add person:</h5>
              <button type="button" class="btn-close text-danger" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="POST" action="./controllers/add-contact.php">
              <input type="hidden" name="id" value="">
                <div class="row">
                    <div class="mb-3 col-6">
                        <label for="first-name" class="col-form-label">First name:</label>
                        <input requireed type="text" name="fname" class="form-control" id="first-name">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="last-name" class="col-form-label">Last name:</label>
                        <input requireed type="text" name="lname" class="form-control" id="last-name">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-6">
                        <label for="email-text" class="col-form-label">Email:</label>
                        <input requireed type="email" name="email" class="form-control" id="email-txt">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="adress-text" class="col-form-label">Adress:</label>
                        <input requireed type="text"  name="adress" class="form-control" id="adress-text">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-6">
                        <label for="phone-text" class="col-form-label">Phone:</label>
                        <input requireed type="text" name="phone" class="form-control" id="phone-txt">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="group-text" class="col-form-label d-block mb-1">Group:</label>
                        <input requireed class="shadow" type="radio" name="group" id="family" value="family" > <label for="family">Family</label>
                        <input requireed class="shadow" type="radio" name="group" id="friend" value="friend"> <label for="friend">Friend</label>
                        <input requireed class="shadow" type="radio" name="group" id="business" value="business"> <label for="business">Business</label>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3">
                        <label for="note-text" class="col-form-label">Note:</label>
                        <textarea requireed class="form-control" id="note-text" name="note"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 text-right">
                        <button type="submit" class="btn btn-primary">Send message</button>
                    </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    <script src="./assets/vendor/bootstrap/bootstrap.min.js"></script>
    <script src="./assets/vendor/jquery/jquery.min.js"></script>
    <script src="./assets/js/script.js"></script>
</body>
</html>