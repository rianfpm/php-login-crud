<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "jwd9";

try {
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch (PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}

// $db = mysqli_connect($db_host, $db_name, $db_user, $db_pass);

// if (!$db) {
//     die("Gagal terhubung dengan database: " . mysqli_connect_error());
// }
