<?php
session_start();
include "./config.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.css" />
    <title>MENU INFORMATION</title>
    <style>
        td>img {
            width: 100px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">

            <div class="col-12 mt-3">
                <a href="../index.php" class="btn btn-sm btn-dark">Go to Home</a>
            </div>

            <div class="col-12 text-center fs-1 mb-4">
                ALL MENU
            </div>

            <!-- CAKES TABLE -->
            <div class="col-12">
                <div class="d-flex justify-content-between m-2">
                    <h4>CAKES</h4>
                    <a href="./insert_cake.php" class="btn btn-sm btn-dark">Add Cakes</a>
                </div>
                <table class="table table-striped table-light">
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>DESC</th>
                        <th>PRICE</th>
                        <th>IMAGE</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                    </tr>
                    <?php

                    $cake_select = $conn->prepare("SELECT * FROM cakes ");
                    $cake_select->execute();
                    $cake_fetch = $cake_select->fetchAll();
                    foreach ($cake_fetch as $cakes) {

                    ?>
                        <tr>
                            <td><?php echo $cakes['id'] ?></td>
                            <td><?php echo $cakes['name'] ?></td>
                            <td><?php echo $cakes['descr'] ?></td>
                            <td><?php echo $cakes['price'] ?></td>
                            <td><img src="./images/<?php echo $cakes['image'] ?>" alt=""></td>

                            <td><a href="./update_cake.php?c_update=<?php echo $cakes['id'] ?>"
                                    class="btn btn-sm btn-info">Edit</a></td>

                            <td><a href="./delete.php?c_deleted=<?php echo $cakes['id'] ?>"
                                    class="btn btn-sm btn-danger">Delete</a></td>
                        </tr>
                    <?php
                    }
                    ?>


                </table>
            </div>
            <!-- CAKES TABLE END -->

            <hr>


            <!-- SWEETS TABLE -->
            <div class="col-12 mt-5">
                <div class="d-flex justify-content-between m-2">
                    <h4>SWEETS</h4>
                    <a href="./insert_sweets.php" class="btn btn-sm btn-dark">Add Sweets</a>
                </div>
                <table class="table table-striped table-light">
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>DESC</th>
                        <th>PRICE</th>
                        <th>IMAGE</th>
                        <th>DELETE</th>
                    </tr>
                    <?php

                    $sweet_select = $conn->prepare("SELECT * FROM sweets ");
                    $sweet_select->execute();
                    $sweet_fetch = $sweet_select->fetchAll();
                    foreach ($sweet_fetch as $sweets) {

                    ?>
                        <tr>
                            <td><?php echo $sweets['id'] ?></td>
                            <td><?php echo $sweets['name'] ?></td>
                            <td><?php echo $sweets['descr'] ?></td>
                            <td><?php echo $sweets['price'] ?></td>
                            <td><img src="./images/<?php echo $sweets['image'] ?>" alt=""></td>
                            <td><a href="./delete.php?s_deleted=<?php echo $sweets['id'] ?>"
                                    class="btn btn-sm btn-danger">Delete</a></td>
                        </tr>
                    <?php
                    }
                    ?>


                </table>
            </div>
            <!-- SWEETS TABLE END -->
            <hr>


            <!-- B|&|C TABLE -->
            <div class="col-12 mt-5">
                <div class="d-flex justify-content-between m-2">
                    <h4>B & C</h4>
                    <a href="./insert_b&c.php" class="btn btn-sm btn-dark">Add B & C</a>
                </div>
                <table class="table table-striped table-light">
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>DESC</th>
                        <th>PRICE</th>
                        <th>IMAGE</th>
                        <th>DELETE</th>
                    </tr>
                    <?php

                    $bc_select = $conn->prepare("SELECT * FROM bisc_cookies ");
                    $bc_select->execute();
                    $bc_fetch = $bc_select->fetchAll();
                    foreach ($bc_fetch as $bc) {

                    ?>
                        <tr>
                            <td><?php echo $bc['id'] ?></td>
                            <td><?php echo $bc['name'] ?></td>
                            <td><?php echo $bc['descr'] ?></td>
                            <td><?php echo $bc['price'] ?></td>
                            <td><img src="./images/<?php echo $bc['image'] ?>" alt=""></td>
                            <td><a href="./delete.php?bc_deleted=<?php echo $bc['id'] ?>"
                                    class="btn btn-sm btn-danger">Delete</a></td>
                        </tr>
                    <?php
                    }
                    ?>

                </table>
            </div>
            <!-- B|&|C TABLE END -->
            <hr>


        </div>
    </div>

</body>

</html>