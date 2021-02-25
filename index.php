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
    <header class="pt-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-2 text-md-left">
                    <div class="logo"><img src="./assets/img/logos/logo.png" alt="Website logo"></div>
                </div>
                <div class="col-12 col-md-10 p-0 text-center d-flex justify-content-between align-items-center">
                    <div class="text-left"><h1 class="h3">Welcome title</h1></div>
                    <div class="text-right"><a href="./login.php" class="btn btn-primary shadow logout-btn"><i class="fa fa-row-left"></i> Logout</a></div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 p-5 shadow border bg-white rounded">
                            <div class="row m-0">
                                <div class="col-12 col-md-6">
                                    <h2 class="h4">Contact list:</h2>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="row justify-content-end align-items-center">
                                        <div class="col-6 search p-0">
                                            <input class="w-100 shadow border rounded p-2" type="search" name="search" id="search" placeholder="search">
                                            <!-- <label for="search"><i class="fa fa-search"></i></label> -->
                                        </div>
                                        <div class="col-auto">
                                            <button class="btn shadow btn-primary p-2" data-bs-toggle="modal" data-bs-target="#add-person">Add person</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <table class="table table-striped">
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
                                        <tr>
                                            <td>58011</td>
                                            <td>Abby</td>
                                            <td>Adams</td>
                                            <td>abby@anywhere.com</td>
                                            <td>Adress1</td>
                                            <td>Phone1</td>
                                            <td>Family</td>
                                            <td><a href="#">Edit</a> <a href="#"><i class="fa fa-times-circle text-danger"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>58011</td>
                                            <td>Abby</td>
                                            <td>Adams</td>
                                            <td>abby@anywhere.com</td>
                                            <td>Adress1</td>
                                            <td>Phone1</td>
                                            <td>Family</td>
                                            <td><a href="#">Edit</a> <a href="#"><i class="fa fa-times-circle text-danger"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>58011</td>
                                            <td>Abby</td>
                                            <td>Adams</td>
                                            <td>abby@anywhere.com</td>
                                            <td>Adress1</td>
                                            <td>Phone1</td>
                                            <td>Family</td>
                                            <td><a href="#">Edit</a> <a href="#"><i class="fa fa-times-circle text-danger"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>58011</td>
                                            <td>Abby</td>
                                            <td>Adams</td>
                                            <td>abby@anywhere.com</td>
                                            <td>Adress1</td>
                                            <td>Phone1</td>
                                            <td>Family</td>
                                            <td><a href="#">Edit</a> <a href="#"><i class="fa fa-times-circle text-danger"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>58011</td>
                                            <td>Abby</td>
                                            <td>Adams</td>
                                            <td>abby@anywhere.com</td>
                                            <td>Adress1</td>
                                            <td>Phone1</td>
                                            <td>Family</td>
                                            <td><a href="#">Edit</a> <a href="#"><i class="fa fa-times-circle text-danger"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>58011</td>
                                            <td>Abby</td>
                                            <td>Adams</td>
                                            <td>abby@anywhere.com</td>
                                            <td>Adress1</td>
                                            <td>Phone1</td>
                                            <td>Family</td>
                                            <td><a href="#">Edit</a> <a href="#"><i class="fa fa-times-circle text-danger"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>58011</td>
                                            <td>Abby</td>
                                            <td>Adams</td>
                                            <td>abby@anywhere.com</td>
                                            <td>Adress1</td>
                                            <td>Phone1</td>
                                            <td>Family</td>
                                            <td><a href="#">Edit</a> <a href="#"><i class="fa fa-times-circle text-danger"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>58011</td>
                                            <td>Abby</td>
                                            <td>Adams</td>
                                            <td>abby@anywhere.com</td>
                                            <td>Adress1</td>
                                            <td>Phone1</td>
                                            <td>Family</td>
                                            <td><a href="#">Edit</a> <a href="#"><i class="fa fa-times-circle text-danger"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>58011</td>
                                            <td>Abby</td>
                                            <td>Adams</td>
                                            <td>abby@anywhere.com</td>
                                            <td>Adress1</td>
                                            <td>Phone1</td>
                                            <td>Family</td>
                                            <td><a href="#">Edit</a> <a href="#"><i class="fa fa-times-circle text-danger"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>58011</td>
                                            <td>Abby</td>
                                            <td>Adams</td>
                                            <td>abby@anywhere.com</td>
                                            <td>Adress1</td>
                                            <td>Phone1</td>
                                            <td>Family</td>
                                            <td><a href="#">Edit</a> <a href="#"><i class="fa fa-times-circle text-danger"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>58011</td>
                                            <td>Abby</td>
                                            <td>Adams</td>
                                            <td>abby@anywhere.com</td>
                                            <td>Adress1</td>
                                            <td>Phone1</td>
                                            <td>Family</td>
                                            <td><a href="#">Edit</a> <a href="#"><i class="fa fa-times-circle text-danger"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
        </section>
    </main>



    <!-- Add contact modal -->
    <?php include "./add_person.php"; ?>
    <script src="./assets/vendor/bootstrap/bootstrap.min.js"></script>
    <script src="./assets/js/script.js"></script>
</body>
</html>