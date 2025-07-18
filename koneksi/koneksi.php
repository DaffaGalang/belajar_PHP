<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "phpdasar";

$koneksi = mysqli_connect($host, $user, $pass, $db);

function query($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}



function tambah($data) {
    global $koneksi;
    $no_reg = $data["no_reg"];
    $judul = $data["judul"];
    $pengarang = $data["pengarang"];
    $tema = $data["tema"];
    $sampul = $data["sampul"];

    $query = "INSERT INTO perpus (no_reg, judul, pengarang, tema, sampul) VALUES 
            ('$no_reg', '$judul', '$pengarang', '$tema', '$sampul')";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi); 
}

if (!$koneksi) {
    die("Koneksi Gagal / Bermasalah : " . mysqli_connect_error());
}
