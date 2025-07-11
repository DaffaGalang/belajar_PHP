<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "phpdasar";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if(!$koneksi){
    die("Koneksi Gagal / Bermasalah : " . mysqli_connect_error()) ;
} else {
    echo "Aman aja cuy";
}

?>