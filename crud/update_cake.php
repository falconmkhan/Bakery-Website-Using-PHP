<?php
session_start();
include "./config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/bootstrap.css">

    <title>CAKES EDIT</title>
    <style>
        .image {
            width: 200px;
        }
    </style>
</head>

<body>

    <?php

    if (isset($_REQUEST['c_update'])) {
        $upd_id = $_REQUEST['c_update'];

        $select_query = $conn->prepare("SELECT * FROM cakes WHERE id = '$upd_id' ");
        $select_query->execute();

        $fetch = $select_query->fetchAll();

        foreach ($fetch as $upd_data) {
            $old_id = $upd_data['id'];
            $old_name = $upd_data['name'];
            $old_desc = $upd_data['descr'];
            $old_image = $upd_data['image'];
            $old_price = $upd_data['price'];
        }
    }

    ?>


    <div class="container">
        <div class="row">

            <div class="col-12">
                <a href="./all_menu.php" class="btn mt-2 btn-dark">ALL MENU</a>
                <h1 class="text-center">Edit Information</h1>
            </div>
            <div class="col-12 col-md-6 align-item-center shadow">
                <form action="" method="post" enctype="multipart/form-data">
                    <br>
                    <img src="./images/<?php echo $old_image ?>" class="image" alt="">
                    <input value="<?php echo $old_id ?>" name="id" readonly class="form-control"><br>
                    <input type="text" class="form-control" name="c_name" value="<?php echo $old_name ?>" placeholder="Cake Name"><br>
                    <input type="text" class="form-control" name="c_desc" value="<?php echo $old_desc ?>" placeholder="Cake Description"><br>
                    <input type="text" class="form-control" name="c_price" value="<?php echo $old_price ?>" placeholder="Cake price"><br>
                        <label for="new_img">New Image</label><br>
                        <input type="file" id="new_img" name="c_img"><br><br>
                      <button class="btn btn-dark" name="update_data">Update</button>
                </form>
            </div>
        </div>
    </div>

<?php

if(isset($_REQUEST['update_data'])){
    $old_image = $upd_data['image'];
    $id = $_REQUEST['id'];
    $name = $_REQUEST['c_name'];
    $desc = $_REQUEST['c_desc'];
    $price = $_REQUEST['c_price'];
    $image = $_FILES['c_img'];  
    // echo $image['name'];
    if($image['name'] === ""){
        $update_query = $conn->prepare("UPDATE cakes SET name = '$name' , descr = '$desc' , image = '$old_image' , price = '$price' 
        WHERE id = '$id'");
        $update_query->execute();
    }
    else{
        $img_name = $_FILES['c_img']['name'];
        $tmpname = $_FILES['c_img']['tmp_name'];
        $img_folder = "./images/".$img_name;

        $update_query = $conn->prepare("UPDATE cakes SET name = '$name' , descr = '$desc' , image = '$img_name' , price = '$price' 
        WHERE id = '$id'");
        $update_query->execute();

        if($update_query){
            if(move_uploaded_file($tmpname, $img_folder)){
                unlink("./images/".$old_image);
            }
            else{
                echo "old image didn't delet";
            }
        }
        else{
            echo "data didn't update";
        }

    }
}   

?>

</body>
</html>