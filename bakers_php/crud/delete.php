<?php

include "./config.php";

// CAKES DELETED
if(isset($_REQUEST['c_deleted'])){
    $c_id = $_REQUEST['c_deleted'];
    $c_select = $conn->prepare("SELECT * FROM cakes WHERE id = '$c_id' ");
    $c_select->execute();

    $c_fetch = $c_select->fetch();
    $c_fetch['image'];
    $cake_name = $c_fetch['name'];
    
    $c_deleted = $conn->prepare("DELETE FROM cakes WHERE id = '$c_id'");
    $c_deleted->execute();
    if($c_deleted){
        unlink('./images/'.$c_fetch['image']);
        header('Location:./all_menu.php');
        $mc_deleted = $conn->prepare("DELETE FROM menu WHERE items_name = '$cake_name'");
        $mc_deleted->execute();
    }

}




// SWEETS DELETED
if(isset($_REQUEST['s_deleted'])){
    $s_id = $_REQUEST['s_deleted'];
    $s_select = $conn->prepare("SELECT * FROM sweets WHERE id = '$s_id' ");
    $s_select->execute();

    $s_fetch = $s_select->fetch();
    $s_fetch['image'];
    $sweet_name = $s_fetch['name'];
    
    $s_deleted = $conn->prepare("DELETE FROM sweets WHERE id = '$s_id'");
    $s_deleted->execute();
    if($s_deleted){
        unlink('./images/'.$s_fetch['image']);
        header('Location:./all_menu.php');
        $ms_deleted = $conn->prepare("DELETE FROM menu WHERE items_name = '$sweet_name'");
        $ms_deleted->execute();
    }
}




// B & C DELETED
if(isset($_REQUEST['bc_deleted'])){
    $bc_id = $_REQUEST['bc_deleted'];
    $bc_select = $conn->prepare("SELECT * FROM bisc_cookies WHERE id = '$bc_id' ");
    $bc_select->execute();

    $bc_fetch = $bc_select->fetch();
    $bc_fetch['image'];
    $bc_name = $bc_fetch['name'];
    
    $bc_deleted = $conn->prepare("DELETE FROM bisc_cookies WHERE id = '$bc_id'");
    $bc_deleted->execute();
    if($bc_deleted){
        unlink('./images/'.$bc_fetch['image']);
        header('Location:./all_menu.php');
        $bc_deleted = $conn->prepare("DELETE FROM menu WHERE items_name = '$bc_name'");
        $bc_deleted->execute();
    }
}




?>