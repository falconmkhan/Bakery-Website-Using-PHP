<?php

// $servername = "sql206.infinityfree.com";
// $username = "if0_38330789";
// $password = "pRP3RLbopoG";
// $database = "if0_38330789_ansari_bakers";

// $conn = new PDO("mysql:host=$servername; dbname=$database" , $username , $password);

// $conn->setAttribute(PDO::ERRMODE_WARNING , PDO::ERRMODE_EXCEPTION);

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connection successful";
// } catch (PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
// }

$servername = "localhost";
$username = "root";
$password = "";
$database = "ansari_bakers";

$conn = new PDO("mysql:host=$servername; dbname=$database" , $username , $password);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if($conn){
    // echo 'missiozn  passed';
}
else
{
    echo 'mission failed';
}

?>