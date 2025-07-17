<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "phpdasar";

$koneksi = mysqli_connect($host, $user, $pass, $db);

function query($query){
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows [] = $row;
    }
    return $rows;
}

if(!$koneksi){
    die("Koneksi Gagal / Bermasalah : " . mysqli_connect_error()) ;
}

?>