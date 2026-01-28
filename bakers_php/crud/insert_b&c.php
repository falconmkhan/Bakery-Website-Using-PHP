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
    <title>BISCUITS & COOKIES INSERT</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 align-item-center">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                <h1 class="text-center">Add BISCUIT & COOKIES </h1>
                <br>
                    <input type="file" name="b_img"><br><br>
                    <input type="text" class="form-control" name="b_name" placeholder="Biscuits or Cookies Name"><br>
                    <input type="text" class="form-control" name="b_desc" placeholder="Description"><br>
                    <input type="text" class="form-control" name="b_price" placeholder="Price"><br>
                    <input type="submit" name="submit" class="btn btn-dark">
            </form>
        </div>
    </div>
</div>

<div class="container mt-5 border pl-3 shadow pb-3 pt-3">
    <div class="row">
        <div class="col-12 mt-2">
            <a href="../index.php" class="btn btn-sm btn-dark">GO TO HOME</a>
        </div>
        <div class="col-12 mt-2">
            <a href="./insert_cake.php" class="btn btn-sm btn-dark">CAKES</a>
        </div>
        <div class="col-12 mt-2">
            <a href="./insert_sweets.php" class="btn btn-sm btn-dark">ADD SWEETS</a>
        </div>
    </div>
</div>


<?php

if(isset($_REQUEST['submit'])){

    $name = $_REQUEST['b_name'];
    $desc = $_REQUEST['b_desc'];
    $price = $_REQUEST['b_price'];
    $img = $_FILES['b_img'];


    $select_query = $conn->prepare("SELECT * FROM bisc_cookies WHERE name = '$name'");
    $select_query->execute();
    $row_count = $select_query->rowCount();

    if($row_count > 0 ){
        echo "product already added";
    }

    else{

        $imgname = $_FILES['b_img']['name'];
        $img_tmp_name = $_FILES['b_img']['tmp_name'];
        // echo $img_tmp_name . "<br>";
        // echo $imgname . "<br>";
        $folder = './images/'.$imgname;
        // echo $folder;

        $insert = $conn->prepare("INSERT INTO bisc_cookies (name , descr , price , image)
        VALUE ('$name' , '$desc' , '$price' , '$imgname')");
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