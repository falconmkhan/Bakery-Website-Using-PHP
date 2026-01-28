<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "ansari_bakers";

$conn = new PDO("mysql:host=$servername; dbname=$database" , $username , $password);

$conn->setattribute(PDO::ERRMODE_WARNING , PDO::ERRMODE_EXCEPTION);

if($conn){
    // echo 'mission  passed';
}
else
{
    echo 'mission failed';
}

?>