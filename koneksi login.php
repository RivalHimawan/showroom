<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "db_showroom";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn){
    die("<script>alert('Gagal Tersambung Dengan Database.')</script>");
}

?>
