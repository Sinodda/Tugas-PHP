<?php

$host = "localhost";
$db = "db_universitas"; //nama database yang telah di set di php my admin
$uname = "root";
$pass = "";

$connect = mysqli_connect($host, $uname, $pass, $db);

if(!$connect){
    echo "koneksi ke database gagal : " . mysqli_connect_error();
}

?>