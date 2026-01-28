<?php
session_start();
include "./config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/website/css/bootstrap.css">
    <title>CAKES INSERT</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-12">
            <a href="./all_menu.php" class="btn mt-2 btn-dark">MY MENU</a>
        </div>
        <div class="col-12 col-md-6 align-item-center">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                <h1 class="text-center">Add Cake</h1>
                <br>
                    <input type="file" name="c_img"><br><br>
                    <input type="text" class="form-control" name="c_name" placeholder="Cake name"><br>
                    <input type="text" class="form-control" name="c_desc" placeholder="Cake Description"><br>
                    <input type="text" class="form-control" name="c_price" placeholder="Cake price"><br>
                    <input type="submit" name="submit" class="btn btn-outline-dark">
            </form>
        </div>
    </div>
</div>

<div class="container mt-5 border pl-3 shadow pb-3 pt-3">
    <div class="row">
        <div class="col-10 mt-2">
            <a href="../index.php" class="btn btn-sm btn-outline-dark">GO TO HOME</a>
        </div>
        <div class="col-10 mt-2">
            <a href="./insert_b&c.php" class="btn btn-sm btn-outline-dark">BISCUTS & COOKIES</a>
        </div>
        <div class="col-10 mt-2">
            <a href="./insert_sweets.php" class="btn btn-sm btn-outline-dark">ADD SWEETS</a>
        </div>
    </div>
</div>




<?php

if(isset($_REQUEST['submit'])){

    $name = $_REQUEST['c_name'];
    $desc = $_REQUEST['c_desc'];
    $price = $_REQUEST['c_price'];
    $img = $_FILES['c_img'];


    $select_query = $conn->prepare("SELECT * FROM cakes WHERE name = '$name'");
    $select_query->execute();
    $row_count = $select_query->rowCount();

    if($row_count > 0 ){
        echo "product already added";
    }

    else{

        $imgname = $_FILES['c_img']['name'];
        $img_tmp_name = $_FILES['c_img']['tmp_name'];
        $folder = './images/'.$imgname;
        // echo $folder;

        $insert = $conn->prepare("INSERT INTO cakes (name , price , descr , image)
        VALUE ('$name' , '$price' , '$desc' , '$imgname')");
        $insert->execute();

        if($insert){
            move_uploaded_file($img_tmp_name,$folder);

            $insert_menu = $conn->prepare("INSERT INTO menu (items_name)
            VALUE('$name')");
            $insert_menu->execute();
        }
        else{
            echo 'image didnt reach';
        }
    }


}

?>










</body>
</html>